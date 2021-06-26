<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App\Models
 * @mixin Builder
 */
class Book extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function shelve() {
        return $this->belongsTo(Shelves::class);
    }

    public function journal() {
        return $this->hasMany(Journal::class, 'book_id', 'id');
    }

}
