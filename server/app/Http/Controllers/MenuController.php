<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index() {
      $set_menus = DB::table('menus')->where('genre_id', '1')
      ->get();

      $cut_menus = DB::table('menus')->where('genre_id', '2')
      ->get();

      $color_menus = DB::table('menus')->where('genre_id', '3')
      ->get();

      $parm_menus = DB::table('menus')->where('genre_id', '4')
      ->get();

      $straight_menus = DB::table('menus')->where('genre_id', '5')
      ->get();

      $treatment_menus = DB::table('menus')->where('genre_id', '6')
      ->get();

      $hair_set_menus = DB::table('menus')->where('genre_id', '7')
      ->get();

      $head_spa_menus = DB::table('menus')->where('genre_id', '8')
      ->get();

      $other_menus = DB::table('menus')->where('genre_id', '9')
      ->get();
      $menu_titles = DB::table('genres')->get();

    return response()->json([
      'set_menus' => $set_menus,
      'cut_menus' => $cut_menus,
      'color_menus' => $color_menus,
      'parm_menus' => $parm_menus,
      'straight_menus' => $straight_menus,
      'treatment_menus' => $treatment_menus,
      'hair_set_menus' => $hair_set_menus,
      'head_spa_menus' => $head_spa_menus,
      'other_menus' => $other_menus,
      'menu_titles' => $menu_titles,
    ]);
  }
}
