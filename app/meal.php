<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    public function category(){
        
        return $this->belongsTo('App\category');
    }
}
