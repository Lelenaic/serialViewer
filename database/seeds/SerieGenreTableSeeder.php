<?php

use Illuminate\Database\Seeder;

class SerieGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('serie_genre')->insert([
        'serieId' => 1,
        'genreId' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 1,
        'genreId' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 1,
        'genreId' => 3,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 1,
        'genreId' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 2,
        'genreId' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 2,
        'genreId' => 5,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 3,
        'genreId' => 6,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('serie_genre')->insert([
        'serieId' => 3,
        'genreId' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ]);
    }
}
