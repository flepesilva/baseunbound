<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('childApadrinado');
            $table->foreign('childApadrinado')->references('id')->on('proyectoaapadrinados');
            $table->string('nombreTutor')->nullable();
            $table->string('apellidoPTutor')->nullable();
            $table->string('apellidoMTutor')->nullable();
            $table->string('telefonoTutor')->nullable();
            $table->string('rutTutor')->nullable();
            $table->string('parentescoTutor')->nullable();
            $table->string('cesfamTutor')->nullable();
            $table->string('otrosTutor')->nullable();
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
        Schema::dropIfExists('tutors');
    }
}
