<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function order_items()
    {
        return $this->hasMany('App\order_item');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
