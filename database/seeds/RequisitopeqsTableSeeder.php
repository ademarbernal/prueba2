<?php

use Illuminate\Database\Seeder;
use App\Requisitopeq;

class RequisitopeqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Requisitopeq::create([
        		 'requisito' =>'mucha pasiencia a la mascota',
                
                'mascota_id' => 3
		]);
		//Empleado
		 Requisitopeq::create([
        		 'requisito' =>'cuidado en la alimentacion de la mascota ',
                
                'mascota_id' => 3
		]);
		 //Client
		    }
}
