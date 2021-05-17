<?php

use App\Materia;
use Illuminate\Database\Seeder;

class MateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Materia::create([

            'nombre' => 'matematicas'

        ]);

        Materia::create([

            'nombre' => 'Sociales'

        ]);

        Materia::create([

            'nombre' => 'Naturales'

        ]);
    }
}
