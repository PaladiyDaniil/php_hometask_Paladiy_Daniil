<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class StudentsParliamentController implements ControllerMethodName
{

    public function index(): void
    {
        $data = ['title' => 'Students Parliament', 'content' => 'main_pages/sp'];
        new Rendering($data);
    }
}
