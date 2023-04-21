<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\JwtAuth;

class JwtAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(JwtAuth::class, function () {

            return new JwtAuth();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
