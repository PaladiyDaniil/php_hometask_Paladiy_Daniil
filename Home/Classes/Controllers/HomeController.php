<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class HomeController implements ControllerMethodName
{

    public function index() : void{
        $data = ['title' => 'Home', 'content' => 'main_pages/home'];
        new Rendering($data);
    }
}
