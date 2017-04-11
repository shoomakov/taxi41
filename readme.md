<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## TODO:
1. Сгрупировать ```views/*/*.blade.php```
2. Подключить контролер, записывающий данные в БД. Написать обработчик, который будет проверять данные в БД
3. ```$.ajax``` вывести в функцию. Упростить условия. ```name_of_object```. Возможность вызывать переменную, имя которой - строка.
4. Python Build, скрипт который убирает лишние классы для каждого роута.
5. Скрипт для деплоя.
6. Webpack. Minify CSS, JS [true or false].


Контакт-форма:
http://itsolutionstuff.com/post/laravel-53-create-bootstrap-contact-us-form-using-form-requestexample.html

```
CREATE TABLE `taxi41`.`contactus` (
  `name` VARCHAR(256) NOT NULL,
  `email` VARCHAR(256) NOT NULL,
  `message` VARCHAR(256) NOT NULL,
  `updated_at` DATETIME NOT NULL,
  `created_at` DATETIME NOT NULL,
  PRIMARY KEY (`name`, `email`, `message`, `created_at`, `updated_at`)
);
```

Обновить ```.env```-конфиг:
```php artisan config:cache```
