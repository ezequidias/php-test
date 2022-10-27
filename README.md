

## Sobre o projeto

Tecnologias usadas:

- PHP 8.0

- Laravel 8

- Docker

## Iniciando o projeto

com Docker

```
docker-compose -f docker/docker-compose.yml up -d --build nginx php-fpm workspace mysql
```

ou

com Laravel

```
php artisan serve
```


Arquivos utilizados

 - App\Helpers\Message
 - App\Helpers\MessageDateSpecialStrategy
 - App\Helpers\MessageDayOfWeekStrategy
 - App\Helpers\MessageInterface
 - App\Http\Controllers\IndexController
 
 
![Screenshot_296](https://user-images.githubusercontent.com/25870781/198379292-9b2c8234-48c3-4296-9e32-c5e3fb1cca00.png)

