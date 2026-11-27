<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Services\Newsletter\NewsletterDriver;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Honeypot spam check is handled by the ProtectAgainstSpam middleware
     * and basic rate limiting by the throttle middleware on this route.
     */
    public function store(Request $request, NewsletterDriver $newsletter)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
        ]);

        $subscriber = Subscriber::query()->firstOrCreate(
            ['email' => $data['email']],
            [
                'name' => $data['name'] ?? null,
                'source' => $data['source'] ?? 'homepage',
            ]
        );

        $newsletter->subscribe($subscriber);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => "Thanks — you're on the list."]);
        }

        return back()->with('subscribed', true);
    }
}
