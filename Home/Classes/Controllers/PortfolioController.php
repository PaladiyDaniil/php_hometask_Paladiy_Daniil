<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class PortfolioController implements ControllerMethodName
{

    public function index(): void
    {
        $data = ['title' => 'Portfolios', 'content' => 'additional_pages/portfolios'];
        new Rendering($data);
    }
}
