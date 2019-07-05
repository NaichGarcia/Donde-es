## Proyecto 'Donde es?'

Rutas de la API

| Route                                      | Method   |  Return                                      |
|:-------------------------------------------|:--------:|----------------------------------------------|
| /salas/                                    |  GET     | All data of 'salas'                          |
| /salas/:id                                 |  GET     | All data of 'salas' with id = :id            |
| /salas/:id                                 |  POST    | Add data of 'salas' with id = :id            |
| /salas/:id                                 |  DELETE  | Delete data of 'salas' with id = :id         |
| /salas/:id                                 |  PUT     | Update data of 'salas' with id = :id         |
|:-------------------------------------------|:--------:|----------------------------------------------|
| /oficinas/                                 |  GET     | All data of 'oficinas'                       |
| /oficinas/:id                              |  GET     | All data of 'oficinas' with id = :id         |
| /oficinas/:id                              |  POST    | Add data of 'oficinas' with id = :id         |
| /oficinas/:id                              |  DELETE  | Delete data of 'oficinas' with id = :id      |
| /oficinas/:id                              |  PUT     | Update data of 'oficinas' with id = :id      |
|:-------------------------------------------|:--------:|----------------------------------------------|
| /informaciones/                            |  GET     | All data of 'informaciones'                  |
| /informaciones/:id                         |  GET     | All data of 'informaciones' with id = :id    |
| /informaciones/:id                         |  POST    | Add data of 'informaciones' with id = :id    |
| /informaciones/:id                         |  DELETE  | Delete data of 'informaciones' with id = :id |
| /informaciones/:id                         |  PUT     | Update data of 'informaciones' with id = :id |
|:-------------------------------------------|:--------:|----------------------------------------------|
| /facultades/                               |  GET     | All data of 'facultades'                     |
| /facultades/:id                            |  GET     | All data of 'facultades' with id = :id       |
| /facultades/:id                            |  POST    | Add data of 'facultades' with id = :id       |
| /facultades/:id                            |  DELETE  | Delete data of 'facultades' with id = :id    |
| /facultades/:id                            |  PUT     | Update data of 'facultades' with id = :id    |
|:-------------------------------------------|:--------:|----------------------------------------------|
| /edificio/                                 |  GET     | All data of 'edificio'                       |
| /edificio/:id                              |  GET     | All data of 'edificio' with id = :id         |
| /edificio/:id                              |  POST    | Add data of 'edificio' with id = :id         |
| /edificio/:id                              |  DELETE  | Delete data of 'edificio' with id = :id      |
| /edificio/:id                              |  PUT     | Update data of 'edificio' with id = :id      |
|:-------------------------------------------|:--------:|----------------------------------------------|
| /departamentos/                            |  GET     | All data of 'departamentos'                  |
| /departamentos/:id                         |  GET     | All data of 'departamentos' with id = :id    |
| /departamentos/:id                         |  POST    | Add data of 'departamentos' with id = :id    |
| /departamentos/:id                         |  DELETE  | Delete data of 'departamentos' with id = :id |
| /departamentos/:id                         |  PUT     | Update data of 'departamentos' with id = :id |
|:-------------------------------------------|:--------:|----------------------------------------------|


## Instalacion
La RESTful API fue creado con Slim Framework.

Para instalarlo debes de correr el siguiente comando en la ruta a instalar.

    composer create-project slim/slim-skeleton [app]

En donde `[app]` sera el nombre que le daras a la aplicacion

Para correr la api se usa desde una consola en la ruta anterior:

	php -S localhost:8080 -t public public/index.php
