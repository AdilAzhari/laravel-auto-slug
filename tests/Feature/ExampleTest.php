<?php

declare(strict_types=1);

use LaravelAutoSlug\LaravelAutoSlug\LaravelAutoSlug;

it('resolves the singleton', function () {
    expect(app(LaravelAutoSlug::class))->toBeInstanceOf(LaravelAutoSlug::class);
});

it('returns the same instance from the container', function () {
    expect(app(LaravelAutoSlug::class))->toBe(app(LaravelAutoSlug::class));
});

it('merges the package config', function () {
    expect(config('laravel-auto-slug.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('laravel-auto-slug::messages.placeholder'))->toBe('LaravelAutoSlug placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('laravel-auto-slug::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('laravel-auto-slug:placeholder')
        ->expectsOutputToContain('LaravelAutoSlug placeholder command executed.')
        ->assertSuccessful();
});
