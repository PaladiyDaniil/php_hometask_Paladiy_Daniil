<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\Rendering;


class RegisterController
{

    public function index(): void
    {
        $data = ['title' => 'Login', 'content' => 'auth/reg'];
        new Rendering($data);
    }
}
