<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shelves
 * @package App\Models
 * @mixin Builder
 */
class Shelves extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['_token'];
    protected $attributes = ['slug' => 'newslug'];

    public function books() {
        return $this->hasMany(Book::class, 'shelve_id');
    }
}
