<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Admin
        User::create([
        		'name' =>'ademar',
        		'email' =>'ade@gmail.com',
        		'password' => bcrypt('ade123'),
        		'role' => 0
		]);
		//Empleado
		 User::create([
        		'name' =>'bernal',
        		'email' =>'ber@gmail.com',
        		'password' => bcrypt('ber123'),
        		'role' => 1
		]);
		 //Client
		  User::create([
        		'name' =>'jimenez',
        		'email' =>'jim@gmail.com',
        		'password' => bcrypt('jim123'),
        		'role' => 2
		]);
    }
}
