<?php

use Illuminate\Database\Seeder;
use App\Requisitogra;

class RequisitograsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Requisitogra::create([
        		'requisito' =>'mayor cuidado y atencion hacia la mascota ',
        		
        		'mascota_id' => 1
		]);
          Requisitogra::create([
                'requisito' =>'sacar a pasear al parque por lo menos 3 veces a la semana ',
                
                'mascota_id' => 1
        ]);
		
		}
}
