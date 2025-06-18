<?php

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$response = $app->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$app->terminate($request, $response);
