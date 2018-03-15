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
      // SERIE 1
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

      // SERIE 2
      for($i=1;$i<9;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => 4,
          'minutes' => 25,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      // SERIE 3
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

      // SERIE 4
      $x = 6;
      for($j=1;$j<7;$j++){
        $x++;
        for($i=1;$i<11;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      $x++;
      for($i=1;$i<8;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 60,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      // SERIE 5
      $x++;
      for($i=1;$i<10;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 50,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      for($j=1;$j<3;$j++){
        $x++;
        for($i=1;$i<11;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      for($j=1;$j<3;$j++){
        $x++;
        for($i=1;$i<21;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      // SERIE 6
      $x++;
      for($i=1;$i<14;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 24,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      $x++;
      for($i=1;$i<15;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 24,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      // SERIE 7
      $x++;
      for($i=1;$i<13;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 24,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      // SERIE 8
      $x++;
      for($i=1;$i<8;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 50,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      for($j=1;$j<4;$j++){
        $x++;
        for($i=1;$i<14;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      $x++;
      for($i=1;$i<17;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 50,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      // SERIE 9
      for($j=1;$j<5;$j++){
        $x++;
        for($i=1;$i<7;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      // SERIE 10
      $x++;
      for($i=1;$i<14;$i++){
        DB::table('episodes')->insert([
          'numero' => $i,
          'saisonId' => $x,
          'minutes' => 50,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
      }

      for($j=1;$j<3;$j++){
        $x++;
        for($i=1;$i<17;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      for($j=1;$j<3;$j++){
        $x++;
        for($i=1;$i<14;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      // SERIE 11
      for($j=1;$j<3;$j++){
        $x++;
        for($i=1;$i<9;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }

      // SERIE 12
      for($j=1;$j<3;$j++){
        $x++;
        for($i=1;$i<11;$i++){
          DB::table('episodes')->insert([
            'numero' => $i,
            'saisonId' => $x,
            'minutes' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
      }
    }
}
