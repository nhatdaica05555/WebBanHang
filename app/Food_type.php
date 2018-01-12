<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food_type extends Model
{
    //
    protected $table = 'food_type';

    public function food(){
        return $this->hasMany('App\Food','id_type','id');
    }

}
