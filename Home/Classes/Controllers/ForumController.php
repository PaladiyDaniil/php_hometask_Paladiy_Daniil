<?php

/**
 * Class ForumController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;

class ForumController implements ControllerMethodName
{

    public function index(): void
    {
        // Створили масив з темами (топіками) форуму
        $topics = [
            [
                'author' => 'Tubik',
                'title' => 'Prodam garaj',
                'text' => 'Garaj 6x7 s pogrebom'
            ],
            [
                'author' => 'Danya i Dima',
                'title' => 'Prodam barkhatnue tyagi',
                'text' => 'Prodam barkhatnue tyagi nedorogo'
            ]
        ];
        // Передали масив з темами в шаблон
        $data = ['topics' => $topics, 'page' => 'forum'];
        // створили об'єкт класу Rendering, передали в нього масив з темами та назву сторінки
        new Rendering($data);
    }
}
