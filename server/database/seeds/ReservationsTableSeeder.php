<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;


class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $reservations = [];
      for ($i = 1; $i < 20; $i++) {
        $reservations = [
          [
          'menu_id' => rand(1,27),
          'start' => Date::now()->addDays($i),
          'end' => Date::now()->addDays($i)->addHours(1),
          ],
        ];
        foreach ($reservations as $reservation) {
         DB::table('reservations')->insert($reservation);
        }
      }
    }
}
