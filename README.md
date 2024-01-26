# Laravel Settings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inupress/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/inupress/laravel-settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/inupress/laravel-settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/inupress/laravel-settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/inupress/laravel-settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/inupress/laravel-settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/inupress/laravel-settings.svg?style=flat-square)](https://packagist.org/packages/inupress/laravel-settings)

![social image](https://banners.beyondco.de/Laravel%20Settings.png?theme=light&packageManager=composer+require&packageName=inupress%2Flaravel-settings&pattern=charlieBrown&style=style_1&description=Store+Laravel+application+settings&md=1&showWatermark=0&fontSize=100px&images=adjustments)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require inupress/laravel-settings
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-settings-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-settings-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-settings-views"
```

## Usage

```php
$laravelSettings = new Inupress\LaravelSettings();
echo $laravelSettings->echoPhrase('Hello, Inupress!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Inupress](https://github.com/inupress)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
