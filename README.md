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

Ensure the following .env variables are set:

```
GOOGLE_CLIENT_ID=""
GOOGLE_CLIENT_SECRET=""
GOOGLE_DEVELOPER_TOKEN=""
GOOGLE_LOGIN_CUSTOMER_ID=""
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

You may then call any of the methods found on the wrapped [Google Ads Client](https://github.com/googleads/google-ads-php/blob/main/src/Google/Ads/GoogleAds/Lib/V8/GoogleAdsClient.php)

```php
// As yourself
$this->googleAds->authorize($refreshToken);

// As an MCC on behalf of a managed customer
$this->googleAds->authorize($refreshToken, $customerId);

// Campaign Service
$service = $this->googleAds->getCampaignServiceClient();
```

## Versioning
PHP supported version: `^7.3|^8.0`

Google Ads PHP SDK versions: `^11.0` [(V9)](https://github.com/googleads/google-ads-php/tree/main/src/Google/Ads/GoogleAds/V9)

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Developed and maintained by [Joel Butcher](https://joelbutcher.co.uk)

## Credits

You can view all contributers [here](https://github.com/joelbutcher/laravel-googleads/graphs/contributors)

## License

This pacakge is open-sourced software licensed under the [MIT license](LICENSE.md).
