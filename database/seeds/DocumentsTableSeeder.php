<?php

use Illuminate\Database\Seeder;
use App\Document;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Document::create([
        'nombre' => 'nomdoc.for',
        'tamaño' => '8000',
      ]);
    }
}
