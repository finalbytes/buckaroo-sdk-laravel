![PHP version][ico-php-version]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![Total Downloads][ico-downloads]][link-downloads]


# Laravel Wrapper for Buckaroo Payment Gateway

[Buckaroo Documentation](https://docs.buckaroo.io/)

This is a laravel wrapper for the [Buckaroo SDK](https://github.com/buckaroo-it/BuckarooSDK_PHP)

## Installation

Via Composer:

``` bash
composer require finalbytes/buckaroo-sdk-laravel
```

## Usage

Update .env file with your credentials:

``` bash
- BUCKAROO_WEBSITE_KEY
- BUCKAROO_SECRET_KEY
- BUCKAROO_TEST_MODE
```

For publishing the config file:

``` bash
php artisan vendor:publish --provider="Finalbytes\Buckaroo\BuckarooServiceProvider"
```

# Examples

``` php
use Finalbytes\Buckaroo\Buckaroo;

$issuers = Buckaroo::getIssuers('ideal')->issuers();
dd($issuers);
```

## Testing

Running the tests with:

``` bash
composer test
``` 

## Getting help

If you have bug reports, questions or suggestions please [create a new issue](https://github.com/finalbytes/buckaroo-sdk-laravel/issues/new/choose)..

## Credits

- [Final Bytes - Kevin Kerstjens][link-author]

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-downloads]: https://img.shields.io/packagist/dt/finalbytes/buckaroo-sdk-laravel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-php-version]: https://img.shields.io/packagist/dependency-v/finalbytes/buckaroo-sdk-laravel/php.svg?style=flat-square
[ico-tests]: https://github.com/finalbytes/buckaroo-sdk-laravel/actions/workflows/tests.yml/badge.svg
[ico-version]: https://img.shields.io/packagist/v/finalbytes/buckaroo-sdk-laravel.svg?style=flat-square
[link-author]: https://github.com/finalbytes
[link-downloads]: https://packagist.org/packages/finalbytes/buckaroo-sdk-laravel
[link-packagist]: https://packagist.org/packages/finalbytes/buckaroo-sdk-laravel
[link-tests]: https://github.com/finalbytes/buckaroo-sdk-laravel/actions/workflows/tests.yml