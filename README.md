## Домашнє завдання:
- на 19.04.2023: [посилання](https://github.com/SurkovKostiantyn/php_hometask/blob/main/hometask_19_04_2023.md)

## Посилання на репозиторій:
[https://github.com/SurkovKostiantyn/php_hometask](https://github.com/SurkovKostiantyn/php_hometask)

## Структура проекту:
- `Home/Classes` - класи, інтерфейси, трейти
- `Home/public` - публічні файли, логи, кеш, інші файли, які не потрібно захищати, файл index.php
  - `.gitignore` - файл, який вказує git, які файли не потрібно заливати на сервер
- `composer.json` - файл, який вказує composer, які пакети необхідно встановити
- `Readme.md` - ми зараз в ньому
- `START.bat` - скрипт для запуску локального вебсервера
- `STOP.bat` - скрипт для зупинки локального вебсервера
- `nginx.conf` - конфігурація nginx з вказівками для запуску локального вебсервера
- `nginx/default.conf` - конфігурація nginx для запуску локального вебсервера
- `docker-compose.yml` - конфігурація docker-compose для запуску локального вебсервера

## Як запустити проект?
1. Склонуйте проект на свій комп'ютер:
   - переконайтесь, що у вас встановлено `Git`: команда `git --version` повинна вивести версію `git`
   - якщо не встановлено, то встановіть: https://git-scm.com/downloads
   - запустіть `cmd`, `powershell` або `git bash`
   - перейдіть в папку, де ви хочете зберігати проект (наприклад `cd D:\projects`)
   - виконайте команду: `git clone https://github.com/SurkovKostiantyn/php_hometask`
   - скопіюйте вміст директорії `php_hometask` в ваш проєкт
2. Встановіть залежності проєкт:
   - переконайтесь, що у вас встановлено `composer`: команда `composer --version` повинна вивести версію `composer`
   - якщо не встановлено, то встановіть: https://getcomposer.org/download/
   - відкрийте ваш проєкт в `IDE` (наприклад `PhpStorm`)
   - виконайте команду `composer install` в консолі
   - перевірте, чи з'явились файли в папці `vendor`
3. Запустіть локальний вебсервер:
   - перевірте, чи встановлено php: команда `php --version` повинна вивести версію `php`
   - якщо не встановлено, то встановіть: https://www.php.net/downloads
   - перевірте, чи встановлено nginx: команда `nginx -v` повинна вивести версію `nginx`
   - якщо не встановлено, то встановіть: https://nginx.org/ru/download.html
   - Зверніть увагу, що `php`, `nginx` повинні бути встановлені в корні диска С
   - переконайтесь, що у вас правильно налаштовано конфігурацію nginx
     - перегляньте файл `nginx.conf` в корені проєкту, він надається для прикладу
     - також ви можете замінити ним оригінальний файл `C:/nginx/conf/nginx.conf` та налаштувати його:
     - відкрийте файл `C:/nginx/conf/nginx.conf`
       - перевірте змінні `root`, `server_name`, `listen`
       - приклад:
         ```
         server {
             listen       80;
             server_name  localhost;
             root         D:/projects/php_hometask_petrik_pyatochkin/Home/public;
             index        index.php;
         ```

   - запустіть `START.bat`
   - перевірте, чи працює ваш проєкт: в браузері відкрийте адресу `http://localhost:80`
4. Коли з налаштуваннями закінчено, можете переходити до роботи над завданнями:
   - завдання ви можете знайти в корні проєкту в файлі `hometask_дата.md`
   - виконані завдання заливайте до свого репозиторію з комітом `поточна дата`
5. Важливо: зверніть увагу - це остання інструкція по налаштуванню вебсервера. Наступного разу ви будете працювати з вже налаштованим проєктом.
6. Якщо ви хочете зупинити вебсервер, запустіть файл `STOP.bat`
7. Усі запитання по інструкції можна задавати в чаті телеграму.

## Як запустити проект? (Docker/Windows)
1. Завантажте та встановіть Docker Desktop: https://www.docker.com/products/docker-desktop
2. Запустіть Docker Desktop
3. Переконайтесь, що в проекті встановлено `docker-compose`: команда `docker-compose --version` повинна вивести версію `docker-compose`
4. Відкрийте ваш проєкт в `IDE` (наприклад `PhpStorm`)
5. Виконайте команду `docker-compose up -d` в консолі
6. Перевірте, чи працює ваш проєкт: в браузері відкрийте адресу `http://localhost:80`

## Як запустити проект? (Docker/Linux)
1. Встановіть Linux(Debian/Ubuntu) dual boot
2. Якщо вийшло - встановіть Docker Desktop: https://www.docker.com/products/docker-desktop
3. Якщо не вийшло - встановіть Docker Engine: https://docs.docker.com/engine/install/ubuntu/
4. Поки досить Linux, можна відпочивати
