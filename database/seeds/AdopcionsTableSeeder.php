<?php

use Illuminate\Database\Seeder;
use App\Adopcion;

class AdopcionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Adopcion::create([
        		'ubicacion' =>'16 de julio',
                'razones' =>'compañia en la casa',
                'profesion' => 'estudiante',
                'estudios' => 'universitario',
                'hoobies' =>'jugar futsal',
                'tipovivienda' =>'tiene 2 pisos sin patio',
                'estado civil' => 'soltero',
                'hijos' => 'ninguno',
                'edadhijos' =>'ninguno',
                'detalles' =>'no tengo ningun tipo de mascota en la casa',
                'reqcasa' => 'no cuento con jardin',
                'casamascota' => 'en un cuarto',
                'limmascota' =>'puede ingresar a todos los cuartos',
                'alimascota' =>'con pedigri',
                'necmascota' => 'salir a caminar, labarlo y atenderlo',
                'primascota' => 'no,tuve otras mascotas',
                 'espmascota' =>'espero que sea jugueton',
                'dismascota' => 'educarlo o tratar de que se adapte',
                'client_id' => 2,
                'support_id' =>1,
                
		]);
         Adopcion::create([
                'ubicacion' =>'villa adela',
                'razones' =>'tener alguien con quien ir a pasear al parque ',
                'profesion' => 'estudiante',
                'estudios' => '15 kilogramos',
                'hoobies' =>'atletismo',
                'tipovivienda' =>'1 piso y tiene patio',
                'estado civil' => 'soltero',
                'hijos' => 'ninguno',
                'edadhijos' =>'ninguno',
                'detalles' =>'no tengo otros animales en la casa',
                'reqcasa' => 'no tengo jardin pero hay una plaza al frente de mi casa',
                'casamascota' => 'en su casita en el patio',
                'limmascota' =>'puede ingresar a todos lo cuartos',
                'alimascota' =>'con pedigri o afrecho',
                'necmascota' => 'salir a caminar y jugar con el',
                'primascota' => 'si',
                 'espmascota' =>'espero q sea muy obediente',
                'dismascota' => 'procurar hacer de que cambie',
                'client_id' => 2,
                'support_id' =>1,
                
        ]);

Adopcion::create([
                'ubicacion' =>'rio seco',
                'razones' =>'para jugar con el',
                'profesion' => 'abogado',
                'estudios' => 'profesional',
                'hoobies' =>'salir a caminar',
                'tipovivienda' =>'3 pisos y con patio y cochera',
                'estado civil' => 'casado',
                'hijos' => '1',
                'edadhijos' =>'4 años',
                'detalles' =>'no tengo otro animal en la casa',
                'reqcasa' => 'tengo un pequeño jardin',
                'casamascota' => 'en su casita en el pasillo del primer piso o en la cochera',
                'limmascota' =>'solo puede ingresar al primer y segundo piso',
                'alimascota' =>'con pedigri',
                'necmascota' => 'sacarlo a caminar, educarlo y labarlo',
                'primascota' => 'no, tuve otras hace tiempo',
                 'espmascota' =>'espero que se adapte a mi familia',
                'dismascota' => 'amaestrarlo ',
                'client_id' => 2,
                'support_id' =>1,
                
        ]);

		
        }
}
