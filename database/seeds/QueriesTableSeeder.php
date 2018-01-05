<?php

use Illuminate\Database\Seeder;
use App\Query;
class QueriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Query::create([
        'nombre' => 'Fabian Catalan',
        'correo' => 'f.catalan.v@gmail.com',
        'asunto' => 'Consulta Precios',
        'consulta' => 'Hola, quisiera saber acerca de los precios de sus servicios, en especifico de una
        causa familiar',
        'estado' => 'No Resuelta', //Leido, o no Leido
      ]);
    }
}
