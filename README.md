## Proyecto 'Donde es?'

Rutas de la API

| Route                                      | Method   |  Return                                |
|:-------------------------------------------|:--------:|----------------------------------------|
| /salas/                                    |  GET     | All data of 'salas'                    |
| /salas/:id                                 |  GET     | All data of 'salas' with id = :id      |
| /salas/:id                                 |  POST    | Add data of 'salas' with id = :id      |
| /salas/:id                                 |  DELETE  | Delete data of 'salas' with id = :id   |
| /salas/:id                                 |  PUT     | Update data of 'salas' with id = :id   |

## Instalacion
La RESTful API fue creado con Slim Framework.

Para instalarlo debes de correr el siguiente comando en la ruta a instalar.

    composer create-project slim/slim-skeleton [app]

En donde `[app]` sera el nombre que le daras a la aplicacion

Para correr la api se usa desde una consola en la ruta anterior:

	php -S localhost:8080 -t public public/index.php
