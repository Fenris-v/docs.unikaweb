<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Solution extends Model
{
    use HasSlug;
    use SoftDeletes;

    /**
     * Генерирует ссылку
     * @return SlugOptions
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Выбирает только отображаемые решения
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query)
    {
        return $query->where('visible', true);
    }

    /**
     * Изменяет роут кей
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
