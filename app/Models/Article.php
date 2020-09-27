<?php
namespace App\Models;

use Franzose\ClosureTable\Models\Entity;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Entity
{
    use HasSlug;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * ClosureTable model instance.
     *
     * @var ArticleClosure
     */
    protected $closure = 'App\Models\ArticleClosure';

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
     * Изменяет роут кей
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Многие ко многим с решениями
     * @return BelongsToMany
     */
    public function solutions()
    {
        return $this->belongsToMany(Solution::class);
    }

    public function depth()
    {
        return $this->hasOne(ArticleClosure::class, 'closure_id');
    }

    /**
     * Корневые категории
     * @param $query
     * @return mixed
     */
    public function scopeNoParents($query)
    {
        return $query->where('parent_id', null);
    }
}
