<?php

use Slim\App;
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

return function (App $app) {
    $container = $app->getContainer();

    //DB
    $container['db'] = function ($c) {
        $settings = $c->get('settings')['db'];
        $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'],
            $settings['user'], $settings['pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    };
};
