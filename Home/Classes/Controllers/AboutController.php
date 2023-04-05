<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class AboutController implements ControllerMethodName
{

    public function index() : void{
        $data = ['title' => 'About', 'content' => 'main_pages/about'];
        new Rendering($data);
    }
}
