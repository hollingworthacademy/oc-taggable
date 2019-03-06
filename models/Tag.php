<?php namespace Hollingworth\Taggable\Models;

use Model;

/**
 * Tag Model
 */
class Tag extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'hollingworth_taggable_tags';

    /**
     * @var boolean Enable/disable timestamps.
     */
    public $timestamps = false;

    /**
     * @var array Fillable attributes.
     */
    protected $fillable = ['name'];
}
