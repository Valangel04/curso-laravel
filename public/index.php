<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| Si la aplicación está en modo de mantenimiento mediante el comando "down",
| cargaremos este archivo para que cualquier contenido pre-renderizado
| pueda mostrarse en lugar de iniciar el framework, lo que podría causar
| una excepción.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer proporciona un cargador de clases automáticamente generado
| para esta aplicación. ¡Solo necesitamos utilizarlo! Simplemente lo
| requerimos en el script aquí para que no necesitemos cargar manualmente
| nuestras clases.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Una vez que tenemos la aplicación, podemos manejar la solicitud entrante
| usando el kernel HTTP de la aplicación. Luego, enviaremos la respuesta de
| vuelta al navegador del cliente, permitiéndoles disfrutar de nuestra aplicación.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
