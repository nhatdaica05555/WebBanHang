<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table = 'bill_detail';

    public function bill(){
        return $this->belongsTo('App\Bills','id_bill','id');
    }

    public function food(){
        return $this->belongsTo('App\Foods','id_food','id');
    }
}
