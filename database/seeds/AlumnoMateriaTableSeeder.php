<?php

use App\MateriasAlumnos;
use Illuminate\Database\Seeder;

class AlumnoMateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



        MateriasAlumnos::create([

                'Alumno_id' => 1,
                'perido_id' => 1
                //'clase_id' =>  1
            ]);

            MateriasAlumnos::create([

                'Alumno_id' => 2,
                'perido_id' => 2
                //'clase_id' =>  2
            ]);


            MateriasAlumnos::create([

                'Alumno_id' => 3,
                'perido_id' => 3
                //'clase_id' =>  3
            ]);
    }
}
