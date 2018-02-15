<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
          'nom' => 'Narcos',
          'resume' => "Cette série de gangsters inspirée de l'histoire du célèbre narcotrafiquant de Medellín raconte la guerre sanglante des cartels en Colombie.",
          'urlImage' => '',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'The End of the fucking world',
          'resume' => "James, âgé de 17 ans, vit seul avec son père veuf, il se présente comme un psychopathe et tue régulièrement des animaux comme passe-temps. Il se lie avec Alyssa, une camarade de lycée, aussi rêveuse que rebelle qui vit avec sa mère et son beau-père.",
          'urlImage' => '',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Stranger Things',
          'resume' => "Quand un jeune garçon disparaît, une petite ville découvre une affaire mystérieuse, des expériences secrètes, des forces surnaturelles terrifiantes... et une fillette.",
          'urlImage' => '',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
