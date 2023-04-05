<?php

/**
 * Class NotFoundController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\Rendering;


class NotFoundController
{

    // Отримали повідомлення про помилку та код помилки
    public function showErrorPage(
        string $message,
        string $code,
    ): void
    {
        // Записали в масив
        $data = [
            'title' => $code,
            'message' => $message,
            'code' => $code,
            'page' => '404' // назва сторінки, ця змінна вказує який саме шаблон буде завантажено
        ];
        new Rendering($data);
    }
}
