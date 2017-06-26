<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; //this is by default
    protected $primaryKey = 'id'; //this is by default


    public function user()
    {
        return $this->hasOne('App\User')->orderBy('order', 'ASC');

    }


}
