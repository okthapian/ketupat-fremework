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

                list($controllerRef, $methodName) = explode('@', $route['action']);

                if (str_contains($controllerRef, ':')) {
                    list($module, $controllerName) = explode(':', $controllerRef);
                    $controllerClass = ucfirst($module) . '_' . ucfirst($controllerName) . 'Controller';
                    $controllerPath = __DIR__ . "/../packages/{$module}/controllers/{$controllerClass}.php";
                } else {
                    $controllerClass = $controllerRef ? ucfirst($controllerRef) . 'Controller' : 'Controller';
                    $controllerPath = __DIR__ . "/../app/controllers/{$controllerClass}.php";
                }

                if (!file_exists($controllerPath)) {
                    http_response_code(500);
                    echo "Controller file not found: {$controllerPath}";
                    exit;
                }

                require_once $controllerPath;

                $method = 'run_' . $methodName;
                $instance = new $controllerClass;

                if (!method_exists($instance, $method)) {
                    http_response_code(500);
                    echo "Method {$method} not found in controller {$controllerClass}";
                    exit;
                }

                return call_user_func_array([$instance, $method], $matches);
            }
        }

        http_response_code(404);
        echo "404 Not Found";
        exit;
    }
}
