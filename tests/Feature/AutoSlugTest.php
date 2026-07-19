<?php

declare(strict_types=1);

namespace LaravelAutoSlug\LaravelAutoSlug\Tests\Feature;

use LaravelAutoSlug\LaravelAutoSlug\Tests\Post;
it('automatically generates a slug when creating a record', function () {
    $post = Post::query()->create(['title' => 'Hello World']);

    expect($post->slug)->toBe('hello-world');
});

it('generates a unique slug if a duplicate title exists', function () {
    Post::query()->create(['title' => 'Hello World']);
    $post2 = Post::query()->create(['title' => 'Hello World']);
    $post3 = Post::query()->create(['title' => 'Hello World']);

    expect($post2->slug)->toBe('hello-world-1')
        ->and($post3->slug)->toBe('hello-world-2');
});
