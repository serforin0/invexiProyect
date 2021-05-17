<?php

use App\Alumnos;
use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumnos::create([

            'nombre' => 'juan',
            'apellido1' => "perez",
            'apellido2' =>  'gutierres',
            'fechaNacimiento' => '16/6/2003'
        ]);

        Alumnos::create([

            'nombre' => 'pedro',
            'apellido1' => "perez",
            'apellido2' =>  'gutierres',
            'fechaNacimiento' => '19/7/2005'
        ]);

        Alumnos::create([

            'nombre' => 'pablo',
            'apellido1' => "peralta",
            'apellido2' =>  'gutierres',
            'fechaNacimiento' => '5/2/2000'
        ]);
    }
}
