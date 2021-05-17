<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //

    protected $fillable = ['nombre', 'apellido1', 'apellido2', 'fechaNacimiento'];
}
