<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reservation extends Model
{
    public function menu(){
      return $this->belongsTo('App\Menu');
    }
}
