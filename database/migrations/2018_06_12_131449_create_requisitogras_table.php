<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitograsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitogras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requisito');
            

            $table->integer('mascota_id')->unsigned();
            $table->foreign('mascota_id')->references('id')->on('mascotas');



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
        Schema::dropIfExists('requisitogras');
    }
}
