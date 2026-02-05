<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'small_title',
        'main_title',
        'phone',
        'email',
        'image_1',
        'image_2',
        'image_3',
    ];
}
