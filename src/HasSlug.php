<?php

namespace LaravelAutoSlug\LaravelAutoSlug;

use Illuminate\Support\Str;

trait HasSlug
{
    protected static function bootHasSlug(): void
    {
        static::saving(function ($model) {
            $model->generateUniqueSlug();
        });
    }

    protected function generateUniqueSlug(): void
    {
        $sourceField = $this->slugSourceField();
        $slugField = $this->slugTargetField();

        if (empty($this->{$sourceField}) || $this->isDirty($slugField)) {
            return;
        }

        $originalSlug = Str::slug($this->{$sourceField});
        $slug = $originalSlug;
        $counter = 1;

        while ($this->slugExists($slug)) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $this->{$slugField} = $slug;
    }

    protected function slugExists(string $slug): bool
    {
        return static::where($this->slugTargetField(), $slug)
            ->where($this->getKeyName(), '!=', $this->getKey())
            ->exists();
    }

    protected function slugSourceField(): string
    {
        return $this->slugSource ?? 'title';
    }

    protected function slugTargetField(): string
    {
        return $this->slugTarget ?? 'slug';
    }
}
