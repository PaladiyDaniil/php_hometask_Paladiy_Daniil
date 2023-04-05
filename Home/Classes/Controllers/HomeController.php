<?php

/**
 * Class HomeController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class HomeController implements ControllerMethodName
{

    public function index() : void{

        // Просто передали назву сторінки в шаблон

        new Rendering(['page' => 'home']);
    }
}
