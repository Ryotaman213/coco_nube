<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reservation extends Model
{
    public static function getCalendarDates($year, $month)
    {
        $date = new Carbon("{$year}-{$month}-01");
        $addDay = ($date->copy()->endOfMonth()->isSunday()) ? 7 : 0;
        $date->subDay($date->dayOfWeek);

        $count = 31 + $addDay + $date->dayOfWeek;
        $count = ceil($count / 7) * 7;
        $dates = [];

        for ($i = 0; $i < $count; $i++, $date->addDay()) {
            // copyしないと全部同じオブジェクトを入れてしまうことになる
            $dates[] = $date->copy();
        }
        return $dates;
    }
}
