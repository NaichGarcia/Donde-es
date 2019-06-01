<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/test', function ($request, $response, $args) {
        $q = $this->get('settings')['test'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']);
        $sth->execute();
        $test = $sth->fetchAll();
        return $this->response->withJson($test);
    });

    $app->get('/test/[{id}]', function($request, $response, $args) {
        $q = $this->get('settings')['test'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']." WHERE ".$q['id'] ."=:id");
        $sth->bindParam('id', $args['id']);
        $sth->execute();
        $test = $sth->fetchObject();
        return $this->response->WithJson($test);
    });
};
