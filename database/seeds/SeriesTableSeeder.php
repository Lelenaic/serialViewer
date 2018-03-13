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
          'nationalite' => 'Etats-Unis',
          'anneeDebut' => '2015',
          'urlImage' => '/images/narcos-allo.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'The End of the fucking world',
          'resume' => "James, âgé de 17 ans, vit seul avec son père veuf, il se présente comme un psychopathe et tue régulièrement des animaux comme passe-temps. Il se lie avec Alyssa, une camarade de lycée, aussi rêveuse que rebelle qui vit avec sa mère et son beau-père.",
          'nationalite' => 'Grande-Bretagne',
          'anneeDebut' => '2017',
          'urlImage' => '/images/theendof.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Stranger Things',
          'resume' => "Quand un jeune garçon disparaît, une petite ville découvre une affaire mystérieuse, des expériences secrètes, des forces surnaturelles terrifiantes... et une fillette.",
          'nationalite' => 'Etats-Unis',
          'anneeDebut' => '2016',
          'urlImage' => '/images/stranger-things.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Game of Thrones',
          'resume' => "Il y a très longtemps, à une époque oubliée, une force a détruit l'équilibre des saisons. Dans un pays où l'été peut durer plusieurs années et l'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes.",
          'nationalite' => 'Etats-Unis',
          'anneeDebut' => '2011',
          'urlImage' => '/images/got.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Vikings',
          'resume' => "Scandinavie, à la fin du 8ème siècle. Ragnar Lodbrok, un jeune guerrier viking, est avide d'aventures et de nouvelles conquêtes. Lassé des pillages sur les terres de l'Est, il se met en tête d'explorer l'Ouest par la mer.",
          'nationalite' => 'Etats-Unis / Grande-Bretagne / Irlande',
          'anneeDebut' => '2013',
          'urlImage' => '/images/vikings.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'My Hero Academia',
          'resume' => "Izuku Midoriya rêve de rejoindre la filière super-héroïque du grand lycée Yūei et de devenir un jour un des plus grands héros.",
          'nationalite' => 'Japon',
          'anneeDebut' => '2016',
          'urlImage' => '/images/my-hero-academia.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Tokyo ghoul',
          'resume' => "L'histoire se déroule dans un Tokyo moderne mais hanté par de mystérieuses goules dévorant les humains. La peur et le chaos règnent sur la ville mais certaines personnes tentent malgré tout d'avoir une vie normale. C'est notamment le cas de Ken Kaneki, un étudiant de 18 ans.",
          'nationalite' => 'Japon',
          'anneeDebut' => '2014',
          'urlImage' => '/images/tokyo-ghoul.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Breaking Bad',
          'resume' => "Walter White, 50 ans, est professeur de chimie dans un lycée du Nouveau-Mexique. Pour subvenir aux besoins de Skyler, sa femme enceinte, et de Walt Junior, son fils handicapé, il est obligé de travailler dans la fabrication d'une drogue de synthèse : le crystal meth.",
          'nationalite' => 'Etats-Unis',
          'anneeDebut' => '2014',
          'urlImage' => '/images/breaking-bad.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Peaky Blinders',
          'resume' => "En 1919, à Birmingham, soldats, révolutionnaires politiques et criminels combattent pour se faire une place dans le paysage industriel de l'après-Guerre. Le Parlement s'attend à une violente révolte, et Winston Churchill mobilise des forces spéciales pour contenir les menaces.",
          'nationalite' => 'Grande-Bretagne',
          'anneeDebut' => '2013',
          'urlImage' => '/images/peaky-blinders.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Les 100',
          'resume' => "Après une apocalypse nucléaire causée par l'Homme lors d'une troisième Guerre Mondiale, les 318 survivants recensés se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000.",
          'nationalite' => 'Etats-Unis',
          'anneeDebut' => '2014',
          'urlImage' => '/images/the100.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Marseille',
          'resume' => " Robert Taro est maire de Marseille depuis 25 ans. Les prochaines élections municipales vont l'opposer à l'homme qu'il avait choisi pour lui succéder, un jeune loup aux dents longues.",
          'nationalite' => 'France',
          'anneeDebut' => '2016',
          'urlImage' => '/images/marseille.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('series')->insert([
          'nom' => 'Westworld',
          'resume' => "A Westworld, un parc d'attractions dernier cri, les visiteurs paient des fortunes pour revivre le frisson de la conquête de l'Ouest. Dolores, Teddy et bien d'autres sont des androïdes à apparence humaine créés pour donner l'illusion et offrir du dépaysement aux clients. Pour ces derniers, Westworld est l'occasion de laisser libre-cours à leurs fantasmes.",
          'nationalite' => 'Etats-Unis',
          'anneeDebut' => '2016',
          'urlImage' => '/images/my-hero-academia.jpg',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
