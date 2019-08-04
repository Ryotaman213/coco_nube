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
          'start_at' => Date::now()->addDays($i),
          'end_at' => Date::now()->addDays($i)->addHours($i),
          ],
        ];
        foreach ($reservations as $reservation) {
         DB::table('reservations')->insert($reservation);
        }
      }
    }
}
