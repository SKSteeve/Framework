<?php

require_once './Providers/Request.php';

use Providers\Request;
use Providers\Router;

$request = new Request();
$router = new Router();

$router->get('/test-post', function ($request) {

});