<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menu';

    public function menu_detail(){
        return $this->belongsTo('App\Menu_detail','id_menu','id');
    }
}
