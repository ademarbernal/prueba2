<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdopcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopcions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubicacion');// donde vives
            $table->string('razones');// porq quieres adoptarlo
            $table->string('profesion');
            $table->string('estudios');
            $table->string('hoobies');
            $table->text('tipovivienda');// que caracteristicas tiene tu vivienda
            $table->string('estado civil');
            $table->string('hijos');// tienes hijos
            $table->string('edadhijos');// edad de los hijos
            $table->text('detalles');// hay otros perros,gatos,animales en la casa
            $table->string('reqcasa');// tienen jardin
            $table->text('casamascota');// donde dormira la mascota
             $table->string('limmascota');// la mascota puede ingresar a todas las habitaciones
            $table->string('alimascota');// como alimentara a la mascota
            $table->string('necmascota');// que necesidades crees q tiene la mascota
            $table->string('primascota');// se trata de tu primera mascota
            $table->string('espmascota');// que esperas de tu perro
            $table->text('dismascota');// que aras si la mascota no se adapta a tu familia

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
        Schema::dropIfExists('adopcions');
    }
}
