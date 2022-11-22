<?php

use App\Providers\Router;
use App\Providers\Request;
use \App\Controllers\TestController;

require_once '../vendor/autoload.php';

define('BASE_PATH', rtrim(preg_replace('#[/\\\\]{1,}#', '/', __DIR__), '/') . '/');

$router = new Router(new Request());

$router->get('/abv/w', ['TestController', 'index']);
$router->post('/', ['TestController', 'edit']);

$router->run();

//echo "<pre>";
//print_r($router);
//print_r($_SERVER);

//$view = new \App\Controllers\TestController();
//$view->index();

