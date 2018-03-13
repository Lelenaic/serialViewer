<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'TestUser',
          'email' => 'test@gmail.com',
          'password' => bcrypt('pwtest'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
          'name' => 'Joshua',
          'email' => 'joshua@gmail.com',
          'password' => bcrypt('jojo10'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
          'name' => 'FanSeries',
          'email' => 'series.fan@gmail.com',
          'password' => bcrypt('fanSeries85'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
          'name' => 'FanFanDu85',
          'email' => 'fanfan85@hotmail.fr',
          'password' => bcrypt('francois85'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
          'name' => 'JohnDoe',
          'email' => 'john.doe@gmail.com',
          'password' => bcrypt('doepwd'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
          'name' => 'kurowa',
          'email' => 'kuro@gmail.com',
          'password' => bcrypt('kuro10'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
