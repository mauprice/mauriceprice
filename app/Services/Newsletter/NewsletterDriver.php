<?php

namespace App\Services\Newsletter;

use App\Models\Subscriber;

interface NewsletterDriver
{
    /**
     * Push a subscriber to the external mailing list provider, if any.
     * The subscriber is always stored locally in the subscribers table
     * before this is called — this only handles the external sync.
     */
    public function subscribe(Subscriber $subscriber): void;
}
