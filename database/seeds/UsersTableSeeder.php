<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Admin
        User::create([
          'name' => 'Elliot',
          'email' => 'eidepozo@hotmail.com',
          'password' => bcrypt('123123'),
          'role' => '0'
        ]);

        //Team member
        User::create([
          'name' => 'Jorge',
          'email' => 'sebita_118@gmail.com',
          'password' => bcrypt('123123'),
          'role' => '1'
        ]);
    }
}
