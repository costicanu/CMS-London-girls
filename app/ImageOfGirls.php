<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageOfGirls extends Model
{
    protected $fillable = [
        'girl_id', 'url', 'featured'
    ];

    protected $table='images';
}
