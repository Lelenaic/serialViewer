<?php

use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($j=1;$j<4;$j++){
        for($i=1;$i<11;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $j,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      for($i=1;$i<9;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => 4,
          'minutes' => 25,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      for($i=1;$i<9;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => 5,
          'minutes' => 55,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      for($i=1;$i<10;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => 6,
          'minutes' => 55,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }
    }
}
