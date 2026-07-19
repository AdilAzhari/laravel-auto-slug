<?php

namespace LaravelAutoSlug\LaravelAutoSlug\Tests;

use Illuminate\Database\Eloquent\Model;
use LaravelAutoSlug\LaravelAutoSlug\HasSlug;

class Post extends Model
{
    use HasSlug;

    protected $fillable = ['title', 'slug'];
}
