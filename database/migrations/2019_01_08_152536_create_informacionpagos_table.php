<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionpagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacionpagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('childPago');
            $table->foreign('childPago')->references('id')->on('proyectoaapadrinados');
            $table->string('nombrePago')->nullable();
            $table->string('apellidoPPago')->nullable();
            $table->string('apellidoMPago')->nullable();
            $table->string('rutPago')->nullable();
            $table->string('numeroCuenta')->nullable();
            $table->string('banco')->nullable();
            $table->string('tipoCuenta')->nullable();
            $table->string('formaPago')->nullable();
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
        Schema::dropIfExists('informacionpagos');
    }
}
