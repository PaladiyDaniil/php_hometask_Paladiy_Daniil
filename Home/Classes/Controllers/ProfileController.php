<?php

/**
 * Class ProfileController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Phpcourse\Myproject\Classes\Traits\MonologTrait;

class ProfileController implements ControllerMethodName
{
    use DebugTrait, MonologTrait;

    public function index(): void
    {
        self::debugConsole('ProfileController::index()');
        self::debugDump('ProfileController::index()');

        self::debugLog('ProfileController::index()');

        $user = [
            'name' => 'John',
            'email' => 'John@email',
            'tel' => '1234567890',
            ];


        new Rendering(['user' => $user, 'page' => 'profile']);
    }
}
