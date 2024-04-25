<?php

namespace App\Providers;

use App\Listeners\SendPodcastNotification;
use App\Models\Client;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::tokensCan(config('openid.passport.tokens_can'));
        Passport::useClientModel(Client::class);

    }
}
