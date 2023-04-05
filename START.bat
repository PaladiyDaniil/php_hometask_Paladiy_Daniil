cd C:\nginx\&cls
taskkill /f /im nginx.exe&cls
start nginx.exe
timeout 1
cd C:\Php\&cls
taskkill /f /im php-cgi.exe&cls
php-cgi.exe -b 127.0.0.1:9000 -c C:/php/php.ini
exit