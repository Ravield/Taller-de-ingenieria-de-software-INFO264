<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('tipo');
          $table->string('resumen');
          //causas asociadas a un usuario
          $table->string('abogado');
          $table->foreign('abogado')->references('name')->on('users');
          $table->integer('client_rut')->unsigned();
          $table->foreign('client_rut')->references('rut')->on('clients');

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('causes');
    }
}
