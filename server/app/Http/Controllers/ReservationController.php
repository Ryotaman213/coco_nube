<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Carbon\Carbon;

class ReserveController extends Controller
{
    public function index() {
      $now = Carbon::now();
      $currentMonth = $now->month;
      $currentYear = $now->year;
      $weeks = ['日', '月', '火', '水', '木', '金', '土'];
      $dates = Reservation::getCalendarDates($currentYear, $currentMonth);

      return view('reserve.index', [
        'dates' => $dates,
        'currentMonth' => $currentMonth,
        'weeks' => $weeks,
      ]);
    }
}
