<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function meals(){
        return $this->hasMany('App\meal');
    }
}
