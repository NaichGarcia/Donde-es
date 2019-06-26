<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Database settings
        'db' => [
            'host' => 'localhost',
            'dbname' => 'uct',
            'user' => 'root',
            'pass' => '',
        ],

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // ------------------- QUERY SETTINGS --------------------
        'salas' => [
            'table' => 'salas',
            'id' => 'id_sala',
        ],

        'edificios' => [
            'table' => 'edificio',
            'id' => 'id_edificio',
        ],

        'departamentos' => [
            'table' => 'departamentos',
            'id' => 'id_departamento',
        ],

        'facultades' => [
            'table' => 'facultades',
            'id' => 'id_facultad',
        ],

        'informaciones' => [
            'table' => 'informaciones',
            'id' => 'id_facultad',
        ],

        'oficinas' => [
            'table' => 'oficinas',
            'id' => 'id_oficina',
        ]
    ],
];
