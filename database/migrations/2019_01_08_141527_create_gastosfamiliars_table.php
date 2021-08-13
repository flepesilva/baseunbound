<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosfamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastosfamiliars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fichafamiliarGastos');
            $table->foreign('fichafamiliarGastos')->references('id')->on('familias');
            $table->bigInteger('alimentacion')->nullable();
            $table->bigInteger('arriendo')->nullable();
            $table->bigInteger('luz')->nullable();
            $table->bigInteger('agua')->nullable();
            $table->bigInteger('gas')->nullable();
            $table->bigInteger('movilizacion')->nullable();
            $table->bigInteger('otro1')->nullable();
            $table->bigInteger('otro2')->nullable();
            $table->bigInteger('otro3')->nullable();
            $table->bigInteger('otro4')->nullable();
            $table->bigInteger('otro5')->nullable();
            $table->bigInteger('ingreso')->nullable();
            $table->bigInteger('egreso')->nullable();
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
        Schema::dropIfExists('gastosfamiliars');
    }
}
