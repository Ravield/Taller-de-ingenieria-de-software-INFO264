<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * cuales de los seeders se tienen que ejecutar
     *importante el orden en que se ejecutan
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CausesTableSeeder::class);
        //$this->call(DocumentsTableSeeder::class);
    }
}
