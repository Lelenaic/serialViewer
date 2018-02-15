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
          'password' => bcrypt('jojodu85'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
