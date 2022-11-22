<?php

namespace App\Providers;

use App\Controllers\TestController;

class Router
{
    private $request;
    private $routes;
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    function get($path, $handlers)
    {
        $this->addRoute($path, self::METHOD_GET, $handlers);
    }

    public function post($path, $handlers)
    {
        $this->addRoute($path, self::METHOD_POST, $handlers);
    }

    public function put($path, $handlers)
    {
        $this->addRoute($path, self::METHOD_PUT, $handlers);
    }

    public function delete($path, $handlers)
    {
        $this->addRoute($path, self::METHOD_DELETE, $handlers);
    }

    private function addRoute($path, $requestMethod, $handlers)
    {
        $this->routes[$path . '_' . $requestMethod] = $handlers;
    }

    public function run()
    {
        $requestUrl = str_replace('/framework/Public', '', trim($this->request->requestUri));
        $requestMethod = $this->request->requestMethod;

        foreach ($this->routes as $routeAndMethod => $handlers) {
            list($route, $method) = explode('_', $routeAndMethod);
            if($route == $requestUrl && $requestMethod == $method) {
                list($controller, $handleMethod) = $handlers;
                $controllerName = ("\\App\Controllers\\" . $controller);
                $controllerInstance = new $controllerName;
                return $controllerInstance->$handleMethod();
            }
        }
        return $this->defaultRequestHandler();
    }

    /**
     * @return void
     */
    private function defaultRequestHandler()
    {
        http_response_code(404);
        echo '404 Page Not Found';
    }

    /**
     * @return void
     */
    private function defaultMethodHandler()
    {
        http_response_code(405);
        echo '405 Method Not Found';
    }
}