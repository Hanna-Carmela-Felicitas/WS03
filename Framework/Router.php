<?php

namespace Framework;

use App\Controllers\ErrorController;
use Framework\Middleware\Authorize;

class Router
{
    protected $routes = [];

    /**
     * Add new route
     *
     * @param string $method
     * @param string $uri
     * @param string $action
     * @param array $middleware
     * @return void
     */

    public function registerRoute($method, $uri, $action, $middleware = [])
    {
        list($controller, $controllerMethod) = explode('@', $action);

        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
            'middleware' => $middleware
        ];
    }

    /**
     * Add GET route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function get($uri, $controller, $middleware = [])
    {
        $this->registerRoute('GET', $uri, $controller, $middleware);
    }

    /**
     * Add POST route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function post($uri, $controller, $middleware = [])
    {
        $this->registerRoute('POST', $uri, $controller, $middleware);
    }

    /**
     * Add PUT route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function put($uri, $controller, $middleware = [])
    {
        $this->registerRoute('PUT', $uri, $controller, $middleware);
    }

    /**
     * Add DELETE route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function delete($uri, $controller, $middleware = [])
    {
        $this->registerRoute('DELETE', $uri, $controller, $middleware);
    }

    /**
     * Route the request
     *
     * @param string $uri
     * @return void
     */

    public function route($uri)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        // Check for _method input
        if ($requestMethod === 'POST' && isset($_POST['_method'])) {

            // Override the request method
            $requestMethod = strtoupper($_POST['_method']);
        }

        foreach ($this->routes as $route) {

            // Split current URI
            $uriSegments = explode('/', trim($uri, '/'));

            // Split route URI
            $routeSegments = explode('/', trim($route['uri'], '/'));

            // Check segment count + method
            if (
                count($uriSegments) === count($routeSegments) &&
                strtoupper($route['method']) === $requestMethod
            ) {

                $params = [];

                $match = true;

                for ($i = 0; $i < count($uriSegments); $i++) {

                    // Check dynamic parameter
                    if (
                        $routeSegments[$i] !== $uriSegments[$i] &&
                        !preg_match('/\{(.+?)\}/', $routeSegments[$i])
                    ) {
                        $match = false;
                        break;
                    }

                    // Extract parameter
                    if (
                        preg_match('/\{(.+?)\}/', $routeSegments[$i], $matches)
                    ) {
                        $params[$matches[1]] = $uriSegments[$i];
                    }
                }

                if ($match) {

                //Extract controller and controller method

                    // Middleware authorization
                    foreach ($route['middleware'] as $middleware) {

                        (new Authorize())->handle($middleware);
                    }

                    // Controller
                    $controller = 'App\\Controllers\\' . $route['controller'];

                    // Method
                    $controllerMethod = $route['controllerMethod'];

                    // Create instance
                    $controllerInstance = new $controller();

                    // Call method
                    $controllerInstance->$controllerMethod($params);

                    return;
                }
            }
        }

        ErrorController::notFound();
    }
}