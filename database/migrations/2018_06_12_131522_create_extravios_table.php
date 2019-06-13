<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extravios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('edad');
            $table->string('color');
            $table->string('peso');
            $table->string('tamaño');
            $table->text('detalle');
            $table->string('lugar');
            $table->dateTime('fecha_hora');// feche de recuperacion

            $table->integer('entrega_id')->unsigned();
            $table->foreign('entrega_id')->references('id')->on('entregas');


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
        Schema::dropIfExists('extravios');
    }
}
