<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(AdopcionsTableSeeder::class);
         $this->call(MascotasTableSeeder::class);
         $this->call(RequisitograsTableSeeder::class);
         $this->call(RequisitopeqsTableSeeder::class);
         $this->call(RequisitosTableSeeder::class);
    }
}
