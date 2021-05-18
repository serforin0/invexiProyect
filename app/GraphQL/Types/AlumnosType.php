<?php

namespace App\GraphQL\Types;

use App\Alumnos;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;


class AlumnosType extends GraphQLType
{

    protected $attributes = [
        'name' => 'Alumnos',
        'description' => 'alumnos de la escula',
        'model' => Project::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'el id del alumno'
            ],
            'nombre' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'nombre del alumno'
            ],
            'apellido1' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'apellido paterno del alumno'
            ],

            'apellido2' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'apellido materno del alumno'
            ],

            'fechaNacimiento' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'fecha de nacimiento del alumno'
            ]
        ];
        }
    }


