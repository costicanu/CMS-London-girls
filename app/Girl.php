<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    //


    public function images()
    {
        return $this->hasMany('App\ImageOfGirls')->orderBy('order','ASC');
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }


}
