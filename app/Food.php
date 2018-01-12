<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table = 'foods';

    public function bill_detail(){
        return $this->hasMany('App\Bill_detail','id_food','id');
    }

    public function menu_detail(){
        return $this->hasMany('App\Menu_detail','id_food','id');
    }
}
