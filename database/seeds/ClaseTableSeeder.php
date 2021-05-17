<?php

use App\Clase;
use Illuminate\Database\Seeder;

class ClaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //




        Clase::create([

            'Materia_id' => 1,
            'idprofesor' => 1,
            'capasidad' =>  30,
            'idperido' => 1
        ]);

        Clase::create([

            'Materia_id' => 2,
            'idprofesor' => 2,
            'capasidad' =>  30,
            'idperido' => 2
        ]);

        Clase::create([

            'Materia_id' => 3,
            'idprofesor' => 3,
            'capasidad' =>  30,
            'idperido' => 3
        ]);
    }
}
