<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function genre(){
      return $this->belongsTo('App\Genre');
    }
}
