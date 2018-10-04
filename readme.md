<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##Mac Os, Ubuntu and windows users continue here:

Create a database locally named primo_est utf8_general_ci

Download composer https://getcomposer.org/download/

Install Composer

Go to project root and install laravel

```sh
$ composer create-project --prefer-dist laravel/laravel blog
```

Rename .env.example file to .envinside your project root and fill the database information.

Open the console and cd your project root directory

```sh
$ Run composer install or php composer.phar install
$ Run php artisan key:generate
$ Run php artisan migrate
$ Run php artisan db:seed to run seeders, if any.
$ Run php artisan serve
```
You can now access your project at localhost:8000
