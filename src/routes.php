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

    //--------------------Edificios Routes-----------------------------------

    //Retorna todos los edificios
    $app->get('/edificios', function ($request, $response, $args) {
        $q = $this->get('settings')['edificios'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']);
        $sth->execute();
        $test = $sth->fetchAll();
        return $this->response->withJson($test);
    });

    //Retorna los edificios segun la id
    $app->get('/edificios/[{id}]', function($request, $response, $args) {
        $q = $this->get('settings')['edificios'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']." WHERE ".$q['id'] ."=:id");
        $sth->bindParam('id', $args['id']);
        $sth->execute();
        $test = $sth->fetchObject();
        return $this->response->WithJson($test);
    });

    //Agrega un edificio
    $app->post('/edificios', function ($request) {
        $q = $this->get('settings')['edificios'];
        $sql = "INSERT INTO " .$q['table']. " (valor, id_edificio, campus, nombre) VALUES (:valor, :id_edificio, :campus, :nombre)";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':valor', $_POST['valor']);
        $sth -> bindParam(':id_edificio', $_POST['id_edificio']);
        $sth -> bindParam(':campus', $_POST['campus']);
        $sth -> bindParam(':nombre', $_POST['nombre']);
        $sth->execute();
    });

    // elimina un edificio por id
    $app->delete('/edificios/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['edificios'];
        $sth = $this->db->prepare("DELETE FROM ".$q['table']." WHERE ".$q['id']."=:id");
        $sth->bindParam(":id", $args['id']);
        $sth->execute();
        $sala = $sth->fetchAll();
        return $this->response->withJson($sala);
    });

    //actualiza edificio segun id
    $app->put('/edificios/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['edificios'];
        $input = $request->getParsedBody();
        $sql = "UPDATE edificio SET valor=:valor, id_edificio=:id_edificio, campus=:campus, nombre=:nombre WHERE ".$q['id']."=:id";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':valor', $input['valor']);
        $sth -> bindParam(':id_edificio', $input['id_edificio']);
        $sth -> bindParam(':campus', $input['campus']);
        $sth -> bindParam(':nombre', $input['nombre']);
        $sth->execute();
    });

    //--------------------Departamentos Routes-----------------------------------

    //Retorna todos los departamentos
    $app->get('/departamentos', function ($request, $response, $args) {
        $q = $this->get('settings')['departamentos'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']);
        $sth->execute();
        $test = $sth->fetchAll();
        return $this->response->withJson($test);
    });

    //Retorna los departamentos segun la id
    $app->get('/departamentos/[{id}]', function($request, $response, $args) {
        $q = $this->get('settings')['departamentos'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']." WHERE ".$q['id'] ."=:id");
        $sth->bindParam('id', $args['id']);
        $sth->execute();
        $test = $sth->fetchObject();
        return $this->response->WithJson($test);
    });

    //Agrega un departamento
    $app->post('/departamentos', function ($request) {
        $q = $this->get('settings')['departamentos'];
        $sql = "INSERT INTO " .$q['table']. " (id_departamento, edificio, piso) VALUES (:id_departamento, :edificio, :piso)";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':id_departamento', $_POST['id_departamento']);
        $sth -> bindParam(':edificio', $_POST['edificio']);
        $sth -> bindParam(':piso', $_POST['piso']);
        $sth->execute();
    });

    // elimina un departamento por id
    $app->delete('/departamentos/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['departamentos'];
        $sth = $this->db->prepare("DELETE FROM ".$q['table']." WHERE ".$q['id']."=:id");
        $sth->bindParam(":id", $args['id']);
        $sth->execute();
        $sala = $sth->fetchAll();
        return $this->response->withJson($sala);
    });

    //actualiza departamento segun id
    $app->put('/departamentos/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['departamentos'];
        $input = $request->getParsedBody();
        $sql = "UPDATE departamentos SET id_departamento=:id_departamento, edificio=:edificio, piso=:piso WHERE ".$q['id']."=:id";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':id_departamento', $input['id_departamento']);
        $sth -> bindParam(':edificio', $input['edificio']);
        $sth -> bindParam(':piso', $input['piso']);
        $sth->execute();
    });

    //--------------------Facultades Routes-----------------------------------

    //Retorna todas las facultades
    $app->get('/facultades', function ($request, $response, $args) {
        $q = $this->get('settings')['facultades'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']);
        $sth->execute();
        $test = $sth->fetchAll();
        return $this->response->withJson($test);
    });

    //Retorna las facultades segun la id
    $app->get('/facultades/[{id}]', function($request, $response, $args) {
        $q = $this->get('settings')['facultades'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']." WHERE ".$q['id'] ."=:id");
        $sth->bindParam('id', $args['id']);
        $sth->execute();
        $test = $sth->fetchObject();
        return $this->response->WithJson($test);
    });

    //Agrega una facultad
    $app->post('/facultades', function ($request) {
        $q = $this->get('settings')['facultades'];
        $sql = "INSERT INTO " .$q['table']. " (nro, id_facultad, departamento) VALUES (:nro, :id_facultad, :departamento)";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':nro', $_POST['nro']);
        $sth -> bindParam(':id_facultad', $_POST['id_facultad']);
        $sth -> bindParam(':departamento', $_POST['departamento']);
        $sth->execute();
    });

    // elimina una facultad por id
    $app->delete('/facultades/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['facultades'];
        $sth = $this->db->prepare("DELETE FROM ".$q['table']." WHERE ".$q['id']."=:id");
        $sth->bindParam(":id", $args['id']);
        $sth->execute();
        $sala = $sth->fetchAll();
        return $this->response->withJson($sala);
    });

    //actualiza facultad segun id
    $app->put('/facultades/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['facultades'];
        $input = $request->getParsedBody();
        $sql = "UPDATE facultades SET nro=:nro, id_facultad=:id_facultad, departamento=:departamento WHERE ".$q['id']."=:id";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':nro', $input['nro']);
        $sth -> bindParam(':id_facultad', $input['id_facultad']);
        $sth -> bindParam(':departamento', $input['departamento']);
        $sth->execute();
    });

    //--------------------Oficinas Routes-----------------------------------

    //Retorna todas las facultades
    $app->get('/oficinas', function ($request, $response, $args) {
        $q = $this->get('settings')['oficinas'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']);
        $sth->execute();
        $test = $sth->fetchAll();
        return $this->response->withJson($test);
    });

    //Retorna las oficinas segun la id
    $app->get('/oficinas/[{id}]', function($request, $response, $args) {
        $q = $this->get('settings')['oficinas'];
        $sth = $this->db->prepare("SELECT * FROM ".$q['table']." WHERE ".$q['id'] ."=:id");
        $sth->bindParam('id', $args['id']);
        $sth->execute();
        $test = $sth->fetchObject();
        return $this->response->WithJson($test);
    });

    //Agrega una oficinas
    $app->post('/oficinas', function ($request) {
        $q = $this->get('settings')['oficinas'];
        $sql = "INSERT INTO " .$q['table']. " (id_oficina, nombre, departamento, edificio, piso) VALUES (:id_oficina, :nombre, :departamento, :edificio, :piso)";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':id_oficina', $_POST['id_oficina']);
        $sth -> bindParam(':nombre', $_POST['nombre']);
        $sth -> bindParam(':departamento', $_POST['departamento']);
        $sth -> bindParam(':edificio', $_POST['edificio']);
        $sth -> bindParam(':piso', $_POST['piso']);
        $sth->execute();
    });

    // elimina una oficina por id
    $app->delete('/oficinas/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['oficinas'];
        $sth = $this->db->prepare("DELETE FROM ".$q['table']." WHERE ".$q['id']."=:id");
        $sth->bindParam(":id", $args['id']);
        $sth->execute();
        $sala = $sth->fetchAll();
        return $this->response->withJson($sala);
    });

    //actualiza oficina segun id
    $app->put('/oficinas/[{id}]', function ($request, $response, $args) {
        $q = $this->get('settings')['oficinas'];
        $input = $request->getParsedBody();
        $sql = "UPDATE facultades SET id_oficina=:id_oficina, nombre=:nombre, departamento=:departamento, edificio=:edificio, piso=:piso WHERE ".$q['id']."=:id";
        $sth = $this->db->prepare($sql);
        $sth -> bindParam(':id_oficina', $_POST['id_oficina']);
        $sth -> bindParam(':nombre', $_POST['nombre']);
        $sth -> bindParam(':departamento', $_POST['departamento']);
        $sth -> bindParam(':edificio', $_POST['edificio']);
        $sth -> bindParam(':piso', $_POST['piso']);
        $sth->execute();
    });

};
