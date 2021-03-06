<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tags extends Model
{
    use HasFactory;
    use HasSlug;

    protected $table = 'tags';
    protected $guarded = ['_token'];
    public $timestamps = false;


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function books() {
        return $this->belongsToMany(Book::class, 'book_tag_enrollments', 'tag_id', 'book_id');
    }
}
