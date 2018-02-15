<?php

use Illuminate\Database\Seeder;

class SaisonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<4;$i++){
          DB::table('saisons')->insert([
            'numero' => $i,
            'serieId' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }

        DB::table('saisons')->insert([
          'numero' => 1,
          'serieId' => 2,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        for($i=1;$i<3;$i++){
          DB::table('saisons')->insert([
            'numero' => $i,
            'serieId' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }

    }
}
