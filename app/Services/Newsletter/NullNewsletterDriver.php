<?php

namespace App\Services\Newsletter;

use App\Models\Subscriber;

/**
 * Default driver: no external provider is configured, so a signup only
 * ever lands in the local subscribers table. Swap NEWSLETTER_DRIVER in
 * .env once a provider is chosen.
 */
class NullNewsletterDriver implements NewsletterDriver
{
    public function subscribe(Subscriber $subscriber): void
    {
        // Intentionally does nothing.
    }
}
