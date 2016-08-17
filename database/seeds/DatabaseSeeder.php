<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

      DB::table('admins')->insert([
                  'name' => "Xavier",
                  'last_name' => "Gonzalez",
                  'email' => 'test@test.com',
                  'password' => bcrypt('secret'),
              ]);
      DB::table('settings')->insert([
                  'title' => "Pildora Creativa",
              ]);
      DB::table('categories')->insert([
                  'name' => "Pildora Creativa",
              ]);
      DB::table('brands')->insert([
                  'name' => "Pildora Creativa",
              ]);
      DB::table('navs')->insert([
                  'name' => "menu superior",
                  'description' => "es el menu que se encuentra en la parte superior",
                  'status' => 0,
              ]);
      DB::table('navs')->insert([
                  'name' => "menu inferior",
                  'description' => "es el menu que se encuentra en la parte inferior",
                  'status' => 1,
              ]);
      // DB::table('settings')->insert([
      //             'title' => "Xavier",
      //         ]);
    }
}
