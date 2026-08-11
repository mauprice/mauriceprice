<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required'
        ]);

        // Verify reCAPTCHA
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('NOCAPTCHA_SECRET'),
            'response' => $validated['g-recaptcha-response'],
            'remoteip' => $request->ip(),
        ]);

        if (!$recaptchaResponse->json('success')) {
            return back()->withErrors(['captcha' => 'reCAPTCHA validation failed. Please try again.'])->withInput();
        }

        // Send email
        Mail::to('maurice@mauriceprice.net')->send(new ContactFormSubmitted($validated));

        return redirect('/contact')->with('success', 'Thank you for your message! I will respond shortly.');
    }

    public function myinterest(Request $request)
    {
        $data = $request->all();

        $data['interest'] = is_array($data['interest']) ? implode(', ', $data['interest']) : '';
        $data['preferred_dates'] = isset($data['preferred_dates']) && is_array($data['preferred_dates'])
            ? implode(', ', $data['preferred_dates'])
            : 'not asked';

        Mail::raw(
            "Name: {$data['name']}\nEmail: {$data['email']}\nInterest: {$data['interest']}\nFormat: {$data['format_preference']}\nPreferred Saturdays: {$data['preferred_dates']}",
            function ($message) {
                $message->to('info@mauriceprice.net')->subject('New Workshop Interest Submission');
            }
        );

        return response()->json(['success' => true]);
    }
}
