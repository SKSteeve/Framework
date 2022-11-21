<?php

namespace Providers;

class Router
{
    /**
     * @var array
     */
    public $routes = [];

    public function __construct()
    {

    }

    public function get($controller, $view)
    {
        $this->routes[] = '';
    }

    public function post()
    {

    }

    public function put()
    {

    }

    public function delete()
    {

    }
}