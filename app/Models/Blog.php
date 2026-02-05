<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'date',         // if you have a date column
        'category',     // if you have category or type
    ];
}
