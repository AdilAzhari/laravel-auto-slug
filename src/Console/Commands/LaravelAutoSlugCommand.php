<?php

declare(strict_types=1);

namespace LaravelAutoSlug\LaravelAutoSlug\Console\Commands;

use Illuminate\Console\Command;

class LaravelAutoSlugCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-auto-slug:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-auto-slug.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('LaravelAutoSlug placeholder command executed.');

        return self::SUCCESS;
    }
}
