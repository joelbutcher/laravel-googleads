<?php

namespace JoelButcher\LaravelGoogleAds;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use JoelButcher\GoogleAds\GoogleAds;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GoogleAds::class, function () {
            return new GoogleAds([
                'client_id' => config('laravel-googleads.client_id'),
                'client_secret' => config('laravel-googleads.client_secret'),
                'developer_token' => config('laravel-googleads.developer_token'),
                'login_customer_id' => (int) config('laravel-googleads.login_customer_id'),
            ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-googleads.php' => config_path('laravel-googleads.php'),
        ], 'laravel-googleads-config');
    }
}
