<?php

use Illuminate\Database\Seeder;
use App\Mascota;

class MascotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mascota::create([
        		'nombre' =>'Rexx',
        		'edad' =>'4 meses',
        		'color' => 'cafe con negro',
        		'peso' => '15 kilogramos',
        		'tamaño' =>'1/2 metro',
        		'detalle' =>'mascota grande',
        		'disponibilidad' => 'en adopcion',
        		'adopcion_id' => 1
		]);
		Mascota::create([
        		'nombre' =>'Dukke',
        		'edad' =>'6 meses',
        		'color' => 'cafe',
        		'peso' => '13 kilogramos',
        		'tamaño' =>'1 metro',
        		'detalle' =>'mascota mediana',
        		'disponibilidad' => 'en adopcion',
        		'adopcion_id' => 2
		]);
		Mascota::create([
        		'nombre' =>'Choco',
        		'edad' =>'1 año',
        		'color' => 'amarillento',
        		'peso' => '14 kilogramos',
        		'tamaño' =>'1.3 metro',
        		'detalle' =>'mascota pequeña',
        		'disponibilidad' => 'adoptado',
        		'adopcion_id' => 3
		]);
    }
}
