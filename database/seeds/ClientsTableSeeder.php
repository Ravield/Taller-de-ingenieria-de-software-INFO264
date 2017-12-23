<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Client::create([
        'nombre' => 'Marco',
        'apellido' => 'Araya',
        'rut' => '188878474',
        'direccion' => 'Pobl. Miramar, Niebla',
        'telefono' => '985993273',
        'correo' => 'ravield1192@gmail.com',
      ]);

      Client::create([
        'nombre' => 'Francisco',
        'apellido' => 'Gonzalez',
        'rut' => '187845444',
        'direccion' => 'Clemente Escobar 4010',
        'telefono' => '974332180',
        'correo' => 'fr4j4@gmail.com',
      ]);
    }
}
