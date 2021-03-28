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

## Versioning
Currently, we only support v6 of the client.

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Developed and maintained by [Joel Butcher](https://joelbutcher.co.uk)

## Credits

You can view all contributers [here](https://github.com/joelbutcher/laravel-googleads/graphs/contributors)

## License

This pacakge is open-sourced software licensed under the [MIT license](LICENSE.md).
