## Proyecto 'Donde es?'

Rutas de la API

| Route                                     | Method  |  Return                                |
|:------------------------------------------|:-------:|----------------------------------------|
| /test/                                    |  GET    | All data of 'table'                    |
| /test/:id                                 |  GET    | All data of 'table' with id = :id      |

## Instalacion
La RESTful API fue creado con Slim Framework.

Para instalarlo debes de correr el siguiente comando en la ruta a instalar.

    composer create-project slim/slim-skeleton [app]

En donde `[app]` sera el nombre que le daras a la aplicacion

Para correr la api se usa desde una consola en la ruta anterior:

	php -S localhost:8080 -t public public/index.php
