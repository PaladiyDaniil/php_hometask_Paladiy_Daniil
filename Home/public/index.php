<?php
    session_start(); // Функція для запуску сесії
    $debug = false; // Параметр, що належить до налагоджувальної інформації

    require_once __DIR__.'/../../vendor/autoload.php'; // Автозавантаження класів

    // Блок неймспейсів
    use Phpcourse\Myproject\Classes\Controllers\ForumController;
    use Phpcourse\Myproject\Classes\Controllers\HomeController;
    use Phpcourse\Myproject\Classes\Controllers\ProfileController;
    use Phpcourse\Myproject\Classes\Controllers\NewsController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router(); // Створюємо об'єкт класу Router

    // Додаємо маршрути
    $router->addRoute('/', HomeController::class, 'index');
    $router->addRoute('/home', HomeController::class, 'index');
    $router->addRoute('/forum', ForumController::class, 'index');
    // /profile
    $router->addRoute('/profile', ProfileController::class, 'index');
    // /news
    $router->addRoute('/news', NewsController::class, 'index');

    // Створюємо об'єкт класу StartApplication та передаємо йому об'єкт класу Router та запит з адресної стрічки
    $app = StartApplication::getInstance($router, $_SERVER['REQUEST_URI'] ?? '/');

    // Запускаємо метод run() класу StartApplication
    $app->run();
