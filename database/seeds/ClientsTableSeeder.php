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
        'rut' => '188878474',
        'direccion' => 'Valdivia',
        'telefono' => '985993273',
        'correo' => 'ravield1192@gmail.com',
        'cause_id' => 1//no creo que esto este bien
      ]);
    }
}
