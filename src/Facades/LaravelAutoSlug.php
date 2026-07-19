<?php

declare(strict_types=1);

namespace LaravelAutoSlug\LaravelAutoSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelAutoSlug\LaravelAutoSlug\LaravelAutoSlug
 */
class LaravelAutoSlug extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelAutoSlug\LaravelAutoSlug\LaravelAutoSlug::class;
    }
}
