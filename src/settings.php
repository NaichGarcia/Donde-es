<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Database settings
        'db' => [
            'host' => 'localhost',
            'dbname' => 'colegio',
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
        'test' => [
            'table' => 'alumnos',
            'id' => 'id',
        ],
    ],
];
