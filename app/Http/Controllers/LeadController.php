<?php

// app/Http/Controllers/LeadController.php

namespace App\Http\Controllers;

use App\Models\Lead; // Assuming you created the Lead Model
use App\Mail\SpiritualSeedsDownload; // <-- NEW: Import the Mailable Class
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail; // <-- NEW: Import the Mail Facade

class LeadController extends Controller
{
    /**
     * Store a newly created lead in the database and handle fulfillment.
     */
    public function store(Request $request)
    {
        // 1. 🍯 Honeypot Check (Spam Prevention)
        // If the hidden 'website' field is filled, it's likely a bot.
        if (!empty($request->input('website'))) {
            Log::warning('Honeypot triggered for email: ' . $request->input('email'));
            // Redirect gracefully as if successful to avoid signaling the honeypot works.
            return redirect('/spiritual-seeds#download')->with('success', true);
        }

        // 2. 🛡️ Validation (Includes a basic check for reCAPTCHA response)
        $validationRules = [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                // Prevent duplicate sign-ups
                // Note: The unique rule is still run here, but the try/catch handles the failure gracefully.
                Rule::unique('leads', 'email'), 
            ],
            'consent' => 'required|accepted',
            'g-recaptcha-response' => 'required|string', // Check presence before manual verification
        ];

        $request->validate($validationRules);

        // 3. 🤖 Google reCAPTCHA Verification (Crucial for live forms)
        // Note: Using env('NOCAPTCHA_SECRET') based on your provided code, 
        // ensure this is the correct key in your .env file.
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!$response->json('success')) {
            Log::error('reCAPTCHA failed for email: ' . $request->input('email'), $response->json());
            return back()->withInput()->withErrors([
                'g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.',
            ]);
        }
        
        $lead = null; // Initialize lead variable
        
        // 4. 💾 Save the Lead to the Database
        try {
            // New entry - create the lead and capture the resulting object
            $lead = Lead::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'consent' => $request->has('consent'),
                'source' => $request->input('source', 'unknown-landing'),
                'offer' => $request->input('offer', 'ebook-offer'),
            ]);

        } catch (\Exception $e) {
            // Check if this is a unique constraint failure (duplicate email)
            if (str_contains($e->getMessage(), 'Duplicate entry') || str_contains($e->getMessage(), 'unique constraint')) {
                Log::info('Duplicate lead submission for: ' . $request->input('email') . '. Proceeding to fulfillment.');
                
                // If the insert failed due to a duplicate email, retrieve the existing lead for fulfillment
                $lead = Lead::where('email', $request->input('email'))->first(); 
            } else {
                // Log and stop if it's a critical error (like database connection/access denied)
                Log::error('Critical Database error saving lead: ' . $e->getMessage());
                // Handle critical database error gracefully (e.g., return an error view, though redirecting
                // to success might be safer in production if mail is the priority)
            }
        }


        // 5. 📧 Fulfillment (Send Email and Redirect)
        if ($lead) { 
            // Send the email using the captured or retrieved Lead object
            Mail::to($lead->email)->send(new SpiritualSeedsDownload($lead)); 
            Log::info('Successfully dispatched email to: ' . $lead->email);

        } else {
             // Fallback logging for a scenario where Lead object could not be created OR retrieved
             Log::warning('Could not retrieve or create Lead object. Skipping email dispatch.');
        }


        // Redirect back to the page with a 'success' session flag.
        return redirect('/spiritual-seeds#download')->with('success', true);
    }
}
