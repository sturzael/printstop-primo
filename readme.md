<p align="center"><img src="https://media.licdn.com/dms/image/C560BAQEuF16-63yutQ/company-logo_200_200/0?e=2159024400&v=beta&t=Yk1j8pBUW4s_-o_5IomY_0K5g308I0xPkVdR7E1IxdE"></p>

<p align="center">Printing management & estimation system.</p>

##Mac Os, Ubuntu and windows users continue here:

Create a database locally named primo_est - utf8_general_ci

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
$ Run setup.sh
```
You can now access your project at localhost:8000
