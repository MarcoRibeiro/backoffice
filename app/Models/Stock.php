<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'equipment',
        'cases',
        'white_frames',
        'black_frames',
        'white_glasses',
        'black_glasses',
        'polarized_films',
        'tempered_films'
    ];
}
