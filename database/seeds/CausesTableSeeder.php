<?php

use Illuminate\Database\Seeder;
use App\Cause;

class CausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cause::create([
        'nombre' => 'Obando vs Hidalgo',
        'tipo' => 'Familia',
        'resumen' => 'pelea en zona zero',
        'user_id' => 1//no creo que esto este bien
      ]);
    }
}
