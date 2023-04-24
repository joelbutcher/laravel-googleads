# Laravel Google Ads

<p align="center">
    <a href="https://packagist.org/packages/joelbutcher/laravel-googleads">
        <img src="https://img.shields.io/packagist/dt/joelbutcher/laravel-googleads" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/joelbutcher/laravel-googleads">
        <img src="https://img.shields.io/packagist/v/joelbutcher/laravel-googleads" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/joelbutcher/laravel-googleads">
        <img src="https://img.shields.io/packagist/l/joelbutcher/laravel-googleads" alt="License">
    </a>
</p>

A Laravel wrapper for the Google Ads Api Client OAuth2 Wrapper.

## Installation

Install the package via composer:

```sh
composer require joelbutcher/laravel-googleads
```

Add the service provider to your package service providers in `config/app.php`:

```php
/*
* Package Service Providers...
*/
\JoelButcher\LaravelGoogleAds\ServiceProvider::class,
```

Then publish the config file:

```sh
php artisan vendor:publish --provider="JoelButcher\LaravelGoogleAds\ServiceProvider"
```

Update your services.php config file with the following

```php
<?php

return [
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    ],
    
    'google_ads' => [
        'developer_token' => env('GOOGLE_ADS_DEVELOPER_TOKEN'),
        'sdk_version' => env('GOOGLE_ADS_VERSION'),
    ],
];
```

## Usage

To use the Google Ads Service, you may inject the service into the constructor of your class, like below:

```php
<?php

use JoelButcher\GoogleAds\GoogleAds;

class MyClass
{
    public function __construct(private GoogleAds $googleAds) {}
}
```

You may then call any of the methods found on the wrapped [Google Ads Client](https://github.com/googleads/google-ads-php/blob/main/src/Google/Ads/GoogleAds/Lib/V13/GoogleAdsClient.php)

```php
// As yourself
$this->googleAds->authorize($refreshToken);

// As an MCC on behalf of a managed customer
$this->googleAds->authorize($refreshToken, $customerId);

// Campaign Service
$service = $this->googleAds->getCampaignServiceClient();
```

## Versioning
PHP supported version: `^8.0`

Google Ads PHP SDK versions: `^19.0` ([V12](https://github.com/googleads/google-ads-php/tree/main/src/Google/Ads/GoogleAds/V12), [V13](https://github.com/googleads/google-ads-php/tree/main/src/Google/Ads/GoogleAds/V13))

## Maintainers

Developed and maintained by [Joel Butcher](https://joelbutcher.dev)

## Credits

You can view all contributors [here](https://github.com/joelbutcher/laravel-googleads/graphs/contributors)

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
