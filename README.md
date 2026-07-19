<div align="center">
    <h1>Laravel Auto Slug</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/adilazhari/laravel-auto-slug"><img src="https://img.shields.io/packagist/v/adilazhari/laravel-auto-slug.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/adilazhari/laravel-auto-slug"><img src="https://img.shields.io/packagist/php-v/adilazhari/laravel-auto-slug.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/adilazhari/laravel-auto-slug"><img src="https://badge.laravel.cloud/badge/adilazhari/laravel-auto-slug?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/adilazhari/laravel-auto-slug/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/adilazhari/laravel-auto-slug/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/adilazhari/laravel-auto-slug"><img src="https://img.shields.io/packagist/dt/adilazhari/laravel-auto-slug.svg?style=flat-square" alt="Total Downloads"></a>
</p>



## Installation

You can install the package via Composer:

```bash
composer require adilazhari/laravel-auto-slug
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="laravel-auto-slug"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="laravel-auto-slug-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="laravel-auto-slug-migrations"
php artisan migrate
```

### Publishing the Views

```bash
php artisan vendor:publish --tag="laravel-auto-slug-views"
```

### Publishing the Translations

```bash
php artisan vendor:publish --tag="laravel-auto-slug-lang"
```

### Publishing the Public Assets

```bash
php artisan vendor:publish --tag="laravel-auto-slug-assets"
```

## Usage

<!-- Add a basic usage example here. -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Laravel Auto Slug! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Adil Azhari](https://github.com/adilazhari)
- [All Contributors](../../contributors)

## License

Laravel Auto Slug is open-sourced software licensed under the [MIT license](LICENSE.md).
