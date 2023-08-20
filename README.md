# International information data set.

![Packagist License](https://img.shields.io/packagist/l/think.studio/laravel-international-info?color=%234dc71f)
[![Packagist Version](https://img.shields.io/packagist/v/think.studio/laravel-international-info)](https://packagist.org/packages/think.studio/laravel-international-info)
[![Total Downloads](https://img.shields.io/packagist/dt/think.studio/laravel-international-info)](https://packagist.org/packages/think.studio/laravel-international-info)
[![Build Status](https://scrutinizer-ci.com/g/dev-think-one/laravel-international-info/badges/build.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/laravel-international-info/build-status/main)
[![Code Coverage](https://scrutinizer-ci.com/g/dev-think-one/laravel-international-info/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/laravel-international-info/?branch=main)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dev-think-one/laravel-international-info/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/dev-think-one/laravel-international-info/?branch=main)

Easy get Country ISO code/State/PhoneCode.

## Installation

Install the package via composer:

```shell
composer require think.studio/laravel-international-info
```

You can publish the config file with:

```shell
php artisan vendor:publish --provider="InternationalInfo\ServiceProvider" --tag="config"
# optional
php artisan vendor:publish --provider="InternationalInfo\ServiceProvider" --tag="storage"
```

## Usage

```php
InternationalInfo::country()->list();
InternationalInfo::country()->list('AI'); // Anguilla

$country = InternationalInfo::country();
$country->findISOCode('GB') // 'GB'
$country->findISOCode('gb') // 'GB'
$country->findISOCode('United Kingdom (UK)') // 'GB'
```

## Credits

- [![Think Studio](https://yaroslawww.github.io/images/sponsors/packages/logo-think-studio.png)](https://think.studio/)
