<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class PassportController implements ControllerMethodName
{

    public function index(): void
    {
        $data = ['title' => 'Passport', 'content' => 'additional_pages/passport'];
        new Rendering($data);
    }
}
