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
        'asunto' => 'Consulta Rikolina',
        'consulta' => 'Necesito ayuda con mi prolapso anal',
        'estado' => 'No Leido', //Leido, o no Leido
      ]);
    }
}
