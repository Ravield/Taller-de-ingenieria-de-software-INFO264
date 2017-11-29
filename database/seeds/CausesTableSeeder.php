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
        'nombre' => 'Araya vs Lazo',
        'tipo' => 'Penal',
        'resumen' => 'Sin descripcion',
        'user_id' => 1//no creo que esto este bien
      ]);

      Cause::create([
        'nombre' => 'Gonzalez vs Hidalgo',
        'tipo' => 'Familia',
        'resumen' => 'Discusion por viaje',
        'user_id' => 2//no creo que esto este bien
      ]);
    }
}
