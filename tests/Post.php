<?php

namespace LaravelAutoSlug\LaravelAutoSlug\Tests;

use Illuminate\Database\Eloquent\Model;
use LaravelAutoSlug\LaravelAutoSlug\HasSlug;
/**
 * @property string $slug
 * @property string $title
 */
class Post extends Model
{
    use HasSlug;

    protected $fillable = ['title', 'slug'];
}
