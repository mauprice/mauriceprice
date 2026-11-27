<?php

namespace App\Providers;

use App\Services\Newsletter\MailerLiteNewsletterDriver;
use App\Services\Newsletter\NewsletterDriver;
use App\Services\Newsletter\NullNewsletterDriver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NewsletterDriver::class, function () {
            return match (config('services.newsletter.driver')) {
                'mailerlite' => new MailerLiteNewsletterDriver(),
                default => new NullNewsletterDriver(),
            };
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
