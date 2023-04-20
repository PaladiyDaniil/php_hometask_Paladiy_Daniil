<?php

/**
 * Class HomeController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class HomeController implements ControllerMethodName
{

    public function index() : void{

        $home = [
            [
                'title' => 'Это домашняя страница. Чувствуй себя как дома.',
                'text'  => 'Тут ты можеш узнать основные существующие страницы на данный момент',
                'pages0'=> 'Есть раздел новостей, где всегда честные и свежие новости: /news',
                'pages1'=> 'Что бы всегда вернуться сюда используй: /home',
                'pages2'=> 'У нас есть форум, обязательно навести его: /forum',
                'pages3'=>'Так же у тебя есть профиль: /profile'
            ]

        ];

        $data = ['home' => $home, 'page' => 'home'];
        new Rendering($data);
    }
}
