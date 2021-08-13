<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('childApadrinado'); 
            $table->foreign('childApadrinado')->references('id')->on('proyectoaapadrinados');
            $table->string('tipoVivienda')->nullable();
            $table->string('tenencia')->nullable();
            $table->string('nombreVivienda')->nullable();
            $table->string('region')->nullable();
            $table->string('sector')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('gaf')->nullable();
            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('viviendas');
    }
}
