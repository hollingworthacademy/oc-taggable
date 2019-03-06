<?php namespace Hollingworth\Taggable\Traits;

trait Taggable
{
    public static function bootTaggable()
    {
        static::extend(function ($model) {
            $model->morphToMany['tags'] = [
                \Hollingworth\Taggable\Models\Tag::class,
                'name' => 'taggable',
                'table' => 'hollingworth_taggable_taggables'
            ];
        });
    }

    //
    // Scopes
    //

    /**
     * @param string|array $tags 
     */
    public function scopeTaggedWith($query, $tags)
    {
        if (!is_array($tags)) {
            $tags = [$tags];
        }

        return $query->whereHas('tags', function ($query) use ($tags) {
            $query->whereIn('name', $tags);
        });
    }
}