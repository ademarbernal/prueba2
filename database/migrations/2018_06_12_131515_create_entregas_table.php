<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubicacion');// donde vives 
            $table->string('ubicaciondelaperdida');// donde se extravio tu mascota
            $table->string('fechaperdida');// en que fecha se perdio tu mascota
            $table->string('disponibilidad');// si la mascota extraviada ya fue recuperada o aun no
            
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');
            $table->integer('support_id')->unsigned();
            $table->foreign('support_id')->references('id')->on('users');

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
        Schema::dropIfExists('entregas');
    }
}
