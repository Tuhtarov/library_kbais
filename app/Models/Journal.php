<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Journal
 * @package App\Models
 * @mixin Builder
 */
class Journal extends Model
{
    use HasFactory;
    protected $table = 'journals';
    public $timestamps = false;
    protected $fillable = ['book_id', 'reader_id', 'added_at', 'when_return', 'returned'];

    public function book() {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function reader() {
        return $this->belongsTo(Reader::class, 'reader_id', 'id');
    }

}
