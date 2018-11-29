<p align="center"><img src="https://github.com/sturzael/printstop-primo/blob/edev/redshift.png"></p>

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
