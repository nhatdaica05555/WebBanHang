<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_detail extends Model
{
    //
    protected $table = 'menu_detail';

    public function food(){
        return $this->hasMany('App\Food','id_food','id');
    }

    public function menu(){
        return $this->belongsTo('App\Menu','id_menu','id');
    }
}
