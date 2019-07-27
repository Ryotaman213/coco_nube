<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function menus() {
      return $this->hasMany('App\Menu');
    }
}
