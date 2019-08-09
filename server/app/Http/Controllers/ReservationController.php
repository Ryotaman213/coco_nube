<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;


class ReservationController extends Controller
{
    public function index() {
      $events = Reservation::all();

      return response()->json([
      'events' => $events,
      ]);
    }
}
