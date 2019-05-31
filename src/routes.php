<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/test', function ($request, $response, $args) {
       $sth = $this->db->prepare("SELECT * FROM alumnos");
       $sth->execute();
       $todos = $sth->fetchAll();
       return $this->response->withJson($todos);
   });
};
