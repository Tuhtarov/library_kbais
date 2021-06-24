<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reader
 * @package App\Models
 * @mixin Builder
 */
class Reader extends Model
{
    use HasFactory;
    public $guarded = ['_token'];
    protected $fillable = ['familyname', 'name', 'patronymic', 'birthday' ,'added_at'];
    public $timestamps = false;

    public function getAge() : int {
        try {
            $currentDate = new DateTime(date('Y-m-d'));
            return $currentDate->diff(new DateTime($this->birthday))->y;
        } catch (\Exception $e) {
            return 0;
        }
    }
}
