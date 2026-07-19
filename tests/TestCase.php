<?php

declare(strict_types=1);

namespace LaravelAutoSlug\LaravelAutoSlug\Tests;

use LaravelAutoSlug\LaravelAutoSlug\LaravelAutoSlugServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelAutoSlugServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations()
    {
        $this->app['db']->connection()->getSchemaBuilder()->dropIfExists('posts');

        $this->app['db']->connection()->getSchemaBuilder()->create('posts', function ($table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }
}
