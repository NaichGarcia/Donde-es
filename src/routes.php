<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    //--------------------Sala Routes-----------------------------------

    //Retorna todas las salas
    $app->get('/salas', function ($request, $response, $args) {
        $q = $this->get('settings')['salas'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']);
        $sth->execute();
        $test = $sth->fetchAll();
        return $this->response->withJson($test);
    });

    //Retorna las salas segun la id
    $app->get('/salas/[{id}]', function($request, $response, $args) {
        $q = $this->get('settings')['salas'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']." WHERE ".$q['id'] ."=:id");
        $sth->bindParam('id', $args['id']);
        $sth->execute();
        $test = $sth->fetchObject();
        return $this->response->WithJson($test);
    });

    //Agrega una Sala
    $app->post('/salas', function ($request) {
        $q = $this->get('settings')['salas'];
        $sql = "INSERT INTO " .$q['table']. " (id_sala, piso, edificio, tipo) VALUES (:id_sala, :piso, :edificio, :tipo)";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':id_sala', $_POST['id_sala']);
        $sth -> bindParam(':piso', $_POST['piso']);
        $sth -> bindParam(':edificio', $_POST['edificio']);
        $sth -> bindParam(':tipo', $_POST['tipo']);
        $sth->execute();
    });

    // elimina una sala por id
    $app->delete('/salas/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['salas'];
        $sth = $this->db->prepare("DELETE FROM ".$q['table']." WHERE ".$q['id']."=:id");
        $sth->bindParam(":id", $args['id']);
        $sth->execute();
        $sala = $sth->fetchAll();
        return $this->response->withJson($sala);
    });

    //actualiza sala segun id
    $app->put('/salas/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['salas'];
        $input = $request->getParsedBody();
        $sql = "UPDATE salas SET piso=:piso, edificio=:edificio, tipo=:tipo WHERE ".$q['id']."=:id";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':piso', $input['piso']);
        $sth -> bindParam(':edificio', $input['edificio']);
        $sth -> bindParam(':tipo', $input['tipo']);
        $sth -> bindParam(":id", $args['id']);
        $sth -> execute();
    });
};
