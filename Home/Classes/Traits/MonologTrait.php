<?php

/**
 * Trait MonologTrait
 * @package Phpcourse\Myproject\Classes\Traits
 */

namespace Phpcourse\Myproject\Classes\Traits;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

trait MonologTrait
{
    public static function debugLog($data): void
    {
        global $debug; // $debug це змінна, яка вказує чи включений режим налагодження
        if ($debug) { // якщо включений режим налагодження
            $log = new Logger('name'); // створюємо об'єкт логера
            $log->pushHandler(new StreamHandler('logs/Debug.log', Level::Warning)); // вказуємо шлях до файлу логів
            $log->warning(json_encode($data)); // записуємо в логи
        }
    }
}
