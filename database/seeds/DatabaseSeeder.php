<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(AlumnosTableSeeder::class);
        $this->call(MateriaTableSeeder::class);
        $this->call(ProfesorTableSeeder::class);
        $this->call(PeriodoTableSeeder::class);
        $this->call(AlumnoMateriaTableSeeder::class);
        $this->call(ClaseTableSeeder::class);
    }
}
