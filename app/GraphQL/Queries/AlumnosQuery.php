<?php

namespace App\GraphQL\Queries;

use App\Alumnos;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;



 class AlumnosQuery extends Query
{

    protected $attributes = [
        'name' => 'el query de Alumnos',
        'description' => 'Retrives alumnos'
    ];

    public function type(): type
    {
        return Type::listOf(GraphQL::type('Alumno'));

    }

    public function resolve($root, $args)
    {
        return Alumnos::all();
    }

}
