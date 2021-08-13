<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('fichafamiliaIntegrante');
            $table->foreign('fichafamiliaIntegrante')->references('id')->on('familias');
            $table->string('nombreCompleto')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('edad')->nullable();
            $table->string('nivelEducacional')->nullable();
            $table->string('ocupacion')->nullable();
            $table->integer('ingresos')->nullable();
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
        Schema::dropIfExists('integrantes');
    }
}
