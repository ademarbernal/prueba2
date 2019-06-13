<?php

use Illuminate\Database\Seeder;
use App\Requisito;

class RequisitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Requisito::create([
        		 'requisito' =>'control hacia la mascota ',
                
                'mascota_id' => 2
		]);
		
		 Requisito::create([
        		 'requisito' =>'control en la alimentacion de la mascota',
                
                'mascota_id' => 2
		]);
		
		           }
}
