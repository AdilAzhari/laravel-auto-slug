<?php

namespace LaravelAutoSlug\LaravelAutoSlug\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use LaravelAutoSlug\LaravelAutoSlug\HasSlug;

class TestModel extends Model
{
    use HasSlug;
}
