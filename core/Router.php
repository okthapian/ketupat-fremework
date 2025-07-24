<?php

class Route
{
    protected static $routes = [];

    public static function get($pattern, $action)
    {
        self::$routes['GET'][] = ['pattern' => $pattern, 'action' => $action];
    }

    public static function dispatch($url, $method = 'GET')
    {
        foreach (self::$routes[$method] as $route) {
            $pattern = preg_replace('#\(:any\)#', '([^/]+)', $route['pattern']);
            $pattern = "#^" . rtrim($pattern, '/') . "$#";

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); // Remove full match

                list($controller, $methodName) = explode('@', $route['action']);
                $controller = ucfirst($controller) . 'Controller';
                $method = 'run_' . $methodName;

                require_once __DIR__ . "/../app/controllers/{$controller}.php";

                $instance = new $controller;
                return call_user_func_array([$instance, $method], $matches);
            }
        }

        // Jika tidak ditemukan
        http_response_code(404);
        echo "404 Not Found";
        exit;
    }
}

