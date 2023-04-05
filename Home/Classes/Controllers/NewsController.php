<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;


class NewsController implements ControllerMethodName
{

    public function index(): void
    {
        $news = [
            [
                'title' => 'Novosti pro garaj',
                'text' => 'Cojgli Garaj 6x7 s pogrebom',
                'data' => '20.04.2023'

            ],
            [
                'title' => 'Sovpadenie? Ne dymayu.',
                'text' => 'Prodali vily na yrane nedaleko or garaja',
                'data' => '21.04.2023'

            ],
            [
                'title' => 'Hot prodaj',
                'text' => 'Prodaut barkhatnue tyagi nedorogo. Phone: +380665231252 ',
                'data' => '23.04.2023'

            ]
        ];
        $data = ['news' => $news, 'page' => 'news'];
        new Rendering($data);
    }
}
