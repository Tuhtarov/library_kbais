<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Class Shelves
 * @package App\Models
 * @mixin Builder
 */
class Shelves extends Model
{
    use HasFactory;
    use HasSlug;

    public $timestamps = false;
    protected $guarded = ['_token'];

    public function books() {
        return $this->hasMany(Book::class, 'shelve_id');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
