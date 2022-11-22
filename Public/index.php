<?php

use App\Providers\Router;
use App\Providers\Request;
use \App\Controllers\TestController;

require_once '../vendor/autoload.php';

$router = new Router(new Request());

// Register Your Routs here

$router->get('/', ['TestController', 'index']);
$router->get('/form', ['TestController', 'edit']);
$router->post('/form', ['TestController', 'create']);

$router->run();
