1. Потрібно створити новий проект в PHP Storm
- Вибрати пункт New Project
- Вибрати пункт PHP Empty Project
- Ввести назву проекту
- Вибрати папку для проекту
- Поставити галочку на пункті "Add 'composer.json' file"
2. В створеному проєкті відкрити термінал
- Вибрати пункт Tools -> Terminal
- В терміналі ввести команду `composer install` для завантаження необхідних бібліотек
- В разі успіху бачимо, що завантажилися бібліотеки та створилася директорія vendor
3. В терміналі запускаємо команду `composer init`
- в разі успіху бачимо надпис `Welcome to the Composer config generator`
- вводимо назву проєкту форматі `vendor/project-name`, наприклад: `mycompany/myproject`
- вводимо опис проєкту, наприклад: `My first project`
- вводимо інформацію про автора, наприклад: `My Name, my email`
- вводимо версію проєкту, наприклад: `1.0.0`
- пункт Minimum Stability залишаємо за замовчуванням (просто натиснути Enter)
- пункт Package Type вказуємо `project`
- пункт License залишаємо за замовчуванням (просто натиснути Enter)
- пункт Would you like to define your dependencies (require) interactively? вказуємо `no`
- пункт Would you like to define your dev dependencies (require-dev) interactively? вказуємо `no`
- пункт Add PSR-4 autoload mapping? вказуємо `yes` та вводимо назву простору імен, наприклад: `MyProject/`
- Все готово до роботи. На пункті `Do you confirm generation` вказуємо `yes`
4. Файл `composer.json` згенеровано. Також у нас з'явилася директорія `MyProject` та файл `composer.lock`
5. В директорії `MyProject` створюємо директорії `Classes` та `public`:
- `composer dump-autoload` - для генерації автозавантаження класів
6. В директорії `Classes` повинні міститись файли з класами, інтерфейсами та трейтами
7. В директорії `public` повинен бути файл `index.php`
8. Приклад створення нового класу:
- В директорії `Classes` створюємо файл `MyClass.php`
- В файлі `MyClass.php` вводимо наступний код:
```php
<?php
namespace Myproject\App\Classes;
class MyClass
{
    const MY_CONST = 'Hello World';
}
?>
```
- В файлі `index.php` вводимо наступний код:
```php
<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Myproject\App\Classes\MyClass;

$myClass = new MyClass();
echo $myClass::MY_CONST;
?>
```
- В терміналі вводимо команду `php public/index.php` та отримуємо результат `Hello World`
- Все готово до роботи
9. Все готово для виконання домашнього завдання.
10. Для виконання домашнього завдання потрібно створити:
- декілька батьківських класів та абстрактних класів
- декілька класів, які будуть наслідуватися від батьківських класів
- створити інтерфейс та клас, який буде його реалізовувати
- створити трейт та клас, який буде його використовувати
- створити клас, який буде використовувати декілька трейтів
11. Всі класи повинні бути розміщені в директорії `Classes`
12. Всі класи повинні бути розміщені в просторі імен `MyProject\App\Classes`
13. Всі класи повинні бути розміщені в окремих файлах:
- назва класу повинна відповідати назві файлу
- ім'я файлу та назва класу повинні бути написані в форматі `StudlyCaps`
