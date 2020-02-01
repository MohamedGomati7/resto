<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_item extends Model
{
   public function meal()
   {
       return $this->belongsTo('App\meal');
   }
}
