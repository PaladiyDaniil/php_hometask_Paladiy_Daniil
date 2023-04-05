<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class NewsController implements ControllerMethodName
{

    public function index(): void
    {
        $data = ['title' => 'News', 'content' => 'main_pages/news'];
        new Rendering($data);
    }
}
