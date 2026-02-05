<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
     protected $fillable = ['small_heading','big_number','unit','description','button_text'];
}
