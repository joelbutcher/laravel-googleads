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
            return new GoogleAds(
                clientId: config('services.google.client_id'),
                clientSecret: config('services.google.client_secret'),
                developerToken: config('services.google_ads.developer_token'),
                sdkVersion: config('services.google_ads.sdk_version'),
            );
        });
    }
}
