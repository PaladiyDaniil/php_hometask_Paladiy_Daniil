<?php

/**
 * Class Router
 * @package Phpcourse\Myproject\Classes\Router
 */

namespace Phpcourse\Myproject\Classes\Router; // простір імен
use Exception; // імпорт класу Exception - використовується для викидання винятків

class Router
{
    private array $routes = [];
    const PATTERN = 0;

    // Додаємо маршрути в масив
    public function addRoute(string $pattern,string $controller, string $action): void
    {
        $this->routes[] = [$pattern,$controller,$action];
    }

    /**
     * @param string $URI
     * @return array|Exception
     * @throws Exception
     */
    public function findRoute(string $URI) : array|Exception{
        foreach ($this->routes as $key => $route){ // перебираємо масив з маршрутами
            if($route[self::PATTERN] === $URI) // якщо збігається патерн з URI
                return $this->routes[$key]; // повертаємо масив з контролером та екшеном
        }
        throw new Exception('Hello! Page not found', 404); // якщо не знайдено збігу, то викидаємо виняток
    }
}
