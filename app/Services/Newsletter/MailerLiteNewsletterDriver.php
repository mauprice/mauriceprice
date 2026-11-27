<?php

namespace App\Services\Newsletter;

use App\Models\Subscriber;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Stub MailerLite integration.
 *
 * TODO(Maurice): set NEWSLETTER_DRIVER=mailerlite, MAILERLITE_API_KEY and
 * MAILERLITE_GROUP_ID in .env once you've chosen MailerLite as the
 * provider. This calls their "add subscriber to group" endpoint; see
 * https://developers.mailerlite.com/docs/subscribers.html for the current
 * request/response shape before relying on this in production.
 *
 * A failure here is logged and swallowed rather than thrown, so a
 * misconfigured or unreachable provider never breaks the local signup —
 * the subscriber is already saved in the subscribers table by this point.
 */
class MailerLiteNewsletterDriver implements NewsletterDriver
{
    public function subscribe(Subscriber $subscriber): void
    {
        $apiKey = config('services.newsletter.mailerlite.api_key');
        $groupId = config('services.newsletter.mailerlite.group_id');

        if (! $apiKey) {
            Log::warning('MailerLite newsletter driver selected but MAILERLITE_API_KEY is not set.');

            return;
        }

        try {
            Http::withToken($apiKey)
                ->post('https://connect.mailerlite.com/api/subscribers', [
                    'email' => $subscriber->email,
                    'fields' => ['name' => $subscriber->name],
                    'groups' => $groupId ? [$groupId] : [],
                ])
                ->throw();
        } catch (\Throwable $e) {
            Log::error('MailerLite subscribe failed for ' . $subscriber->email . ': ' . $e->getMessage());
        }
    }
}
