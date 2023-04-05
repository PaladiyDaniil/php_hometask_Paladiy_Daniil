<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\Rendering;


class LoginController
{

    public function index(): void
    {
        $data = ['title' => 'Login', 'content' => 'auth/login'];
        new Rendering($data);
    }
}
