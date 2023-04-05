<?php

namespace Phpcourse\Myproject\Classes\Router;
use Exception;

class Router
{
    private array $routes = [];
    const PATTERN = 0;
    const CONTROLLER = 1;
    const ACTION = 2;

    public function addRoute(string $pattern,string $controller, string $action): void
    {
        $this->routes[] = [$pattern,$controller,$action];
    }
    /**
     * @throws Exception
     */
    public function findRoute(string $URI) : array|Exception{
        foreach ($this->routes as $key => $route){
            if($route[self::PATTERN] === $URI)
                return $this->routes[$key];
        }
        throw new Exception('Hello! Page not found', 404);
    }
}
