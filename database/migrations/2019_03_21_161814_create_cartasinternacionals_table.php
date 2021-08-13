<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartasinternacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartasinternacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('childCartas');
            $table->foreign('childCartas')->references('id')->on('proyectoaapadrinados');
            $table->string('cartaAgradecimiento')->nullable();
            $table->string('cartaInvierno')->nullable();
            $table->string('cartaNavidad')->nullable();
            $table->string('visitasDomicilio')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('cartasinternacionals');
    }
}
