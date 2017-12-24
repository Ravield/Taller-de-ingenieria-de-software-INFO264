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
        'client_rut' => 187845444,
        'abogado' => 'Elliot Ide',
      ]);

      Cause::create([
        'nombre' => 'Gonzalez vs Hidalgo',
        'tipo' => 'Familia',
        'resumen' => 'Discusion por viaje',
        'client_rut' => 188878474,
        'abogado' => 'Elliot Ide',
      ]);
    }
}
