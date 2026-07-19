<?php

declare(strict_types=1);

namespace LaravelAutoSlug\LaravelAutoSlug;

use Illuminate\Support\ServiceProvider;
use LaravelAutoSlug\LaravelAutoSlug\Console\Commands\LaravelAutoSlugCommand;

class LaravelAutoSlugServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-auto-slug.php', 'laravel-auto-slug');

        $this->app->singleton(LaravelAutoSlug::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/laravel-auto-slug.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-auto-slug');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-auto-slug');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-auto-slug.php' => config_path('laravel-auto-slug.php'),
        ], ['laravel-auto-slug', 'laravel-auto-slug-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-auto-slug'),
        ], ['laravel-auto-slug', 'laravel-auto-slug-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-auto-slug'),
        ], ['laravel-auto-slug', 'laravel-auto-slug-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-auto-slug'),
        ], ['laravel-auto-slug', 'laravel-auto-slug-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-auto-slug', 'laravel-auto-slug-migrations']);

        $this->commands([
            LaravelAutoSlugCommand::class,
        ]);
    }
}
