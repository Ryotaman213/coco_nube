<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
          [
            'name' => 'セットメニュー'
          ],
          [
            'name' => 'カット'
          ],
          [
            'name' => 'カラー'
          ],
          [
            'name' => 'パーマ'
          ],
          [
            'name' => '縮毛矯正'
          ],
          [
            'name' => 'トリートメント'
          ],
          [
            'name' => 'ヘアセット'
          ],
          [
            'name' => 'ヘッドスパ'
          ],
          [
            'name' => 'その他メニュー'
          ],
        ];

        foreach($genres as $genre) {
          DB::table('genres')->insert($genre);
        }
    }
}
