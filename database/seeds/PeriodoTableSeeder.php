<?php


use App\Perido;
use Illuminate\Database\Seeder;

class PeriodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Perido::create([

            'nombre' => '2020-A',
            'fechaInicio' => "enero",
            'fechaFin' =>  'abril'

        ]);

        Perido::create([

            'nombre' => '2020-B',
            'fechaInicio' => "mayo",
            'fechaFin' =>  'agosto'

        ]);

        Perido::create([

            'nombre' => '2020-C',
            'fechaInicio' => "septiembre",
            'fechaFin' =>  'diciembre'

        ]);
    }
}
