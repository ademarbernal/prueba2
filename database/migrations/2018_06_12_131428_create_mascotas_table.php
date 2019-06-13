<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombre');
            $table->string('edad');
            $table->string('color');
            $table->string('peso');
            $table->string('tamaño');
            $table->text('detalle');
            $table->string('disponibilidad');//si la mascota esta en adopcion o si ya fue adoptada

            $table->integer('adopcion_id')->unsigned();
            $table->foreign('adopcion_id')->references('id')->on('adopcions');


           
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
        Schema::dropIfExists('mascotas');
    }
}
