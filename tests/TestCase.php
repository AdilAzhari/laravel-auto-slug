<?php

declare(strict_types=1);

namespace LaravelAutoSlug\LaravelAutoSlug\Tests;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;
use LaravelAutoSlug\LaravelAutoSlug\LaravelAutoSlugServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param  mixed  $app
     * @return array<int, class-string<ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelAutoSlugServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->app['db']->connection()->getSchemaBuilder()->dropIfExists('posts');

        $this->app['db']->connection()->getSchemaBuilder()->create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }
}
