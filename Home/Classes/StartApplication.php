<?php

/**
 * Class StartApplication
 * @package Phpcourse\Myproject\Classes
 */

namespace Phpcourse\Myproject\Classes; // простір імен

use Phpcourse\Myproject\Classes\Controllers\NotFoundController;
use Phpcourse\Myproject\Classes\Router\Router;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Phpcourse\Myproject\Classes\Traits\MonologTrait;

class StartApplication
{
    use DebugTrait, MonologTrait; // використовуємо трейти
    private string $URI;

    private object $routerData; // об'єкт класу Router буде записаний в цю змінну

    const CONTROLLER = 1; // константа для індексу масиву з контролером
    const ACTION = 2; // константа для індексу масиву з екшеном

    private static ?StartApplication $instance = null; // Статична змінна для зберігання екземпляру класу

    private function __construct(readonly Router $router, string $URI)
    {
        $this->URI = $URI; // записуємо URI в змінну
        $this->routerData = $router; //
        self::debugConsole($this->URI); // викликаємо метод debugConsole() з трейту DebugTrait
        self::debugLog($this->URI); //
    }

    public static function getInstance(Router $router, string $URI): StartApplication
    {
        if (self::$instance === null) {
            self::$instance = new StartApplication($router, $URI);
        }
        return self::$instance; // повертаємо екземпляр класу
    }

    public function run(): void{
        try{ // спробуємо знайти збіг нашого URI з патерном роутера
            $match = $this->routerData->findRoute($this->URI); // записуємо масив з контролером та екшеном в змінну
            $controller = $match[self::CONTROLLER]; // записуємо контролер в змінну
            $action = $match[self::ACTION]; // записуємо екшен в змінну
            (new $controller)->$action(); // створюємо об'єкт класу контролера та викликаємо метод екшену
        }catch(\Throwable $e){
            (new NotFoundController)->showErrorPage(
                $e->getMessage(), // повідомлення про помилку
                $e->getCode() // код помилки
            );
        }
    }
}
