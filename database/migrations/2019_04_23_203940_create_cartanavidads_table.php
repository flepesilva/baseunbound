<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartanavidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartanavidads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('childCartas');
            $table->foreign('childCartas')->references('id')->on('cartaotros'); 
            $table->string('si')->nullable();
            $table->string('envio')->nullable();
            $table->date('fecha')->nullable();
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
        Schema::dropIfExists('cartanavidads');
    }
}
