<?php

use App\Profesor;
use Illuminate\Database\Seeder;

class ProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Profesor::create([

            'nombre' => 'manuel',
            'apellido1' => "contrera",
            'apellido2' =>  'diaz',
            'fechaNacimiento' => '2/2/1980'
        ]);

        Profesor::create([

            'nombre' => 'gregorio',
            'apellido1' => "contrera",
            'apellido2' =>  'diaz',
            'fechaNacimiento' => '2/2/1985'
        ]);

        Profesor::create([

            'nombre' => 'burgos',
            'apellido1' => "rondon",
            'apellido2' =>  'diaz',
            'fechaNacimiento' => '3/11/1980'
        ]);
    }
}
