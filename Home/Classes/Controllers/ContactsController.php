<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class ContactsController implements ControllerMethodName
{

    public function index(): void
    {
        $data = ['title' => 'Contacts', 'content' => 'main_pages/contacts'];
        new Rendering($data);
    }
}
