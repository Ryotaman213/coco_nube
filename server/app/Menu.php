<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function genre(){
      return $this->belongsTo('App\Genre');
    }

    public function reservations(){
      return $this->hasMany('App\Reservation');
    }

    public function getYenPriceAttribute() {
      return number_format($this->price) .'円';
    }
}
