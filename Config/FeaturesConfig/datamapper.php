<?php

return [

    'mappingDriver' => 'annotation',

    'databaseDriver' => 'mysql',

    'mysql' => [
        'host' => getenv('DATABASE_HOST'),
        'username' => getenv('DATABASE_USERNAME'),
        'password' => getenv('DATABASE_PASSWORD'),
        'database' => getenv('DATABASE_NAME')
    ],

    'classes' => [

        App\Models\Project::class,
    ]

];