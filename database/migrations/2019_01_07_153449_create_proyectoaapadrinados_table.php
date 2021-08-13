<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoaapadrinadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectoaapadrinados', function (Blueprint $table) {

            $table->integer('id');
            $table->primary('id');
            $table->integer('fichafamiliaApadrinado');
            $table->foreign('fichafamiliaApadrinado')->references('id')->on('familias');
            $table->string('rutA')->nullable();
            $table->string('nombreApadrinado')->nullable();
            $table->string('apPaternoApadrinado')->nullable();
            $table->string('apMaternoApadrinado')->nullable();
            $table->string('cerroA')->nullable();
            $table->string('sectorA')->nullable();
            $table->string('ciudadA')->nullable();
            $table->string('nivelEducacionalApadrinado')->nullable();
            $table->string('discapacidadApadrinado')->nullable();            
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('telefono3')->nullable();
            $table->string('direccionA')->nullable();
            $table->string('institucion')->nullable();
            $table->string('fotoperfil')->nullable();

            $table->string('egreso')->nullable();
            $table->string('razon')->nullable();
            $table->string('descripcion')->nullable();

            $table->date('nacimientoApadrinado')->nullable();
            $table->string('certificado')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectoaapadrinados');
    }
}