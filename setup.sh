echo 'clearing cache'
php artisan cache:clear

echo 'clearing config'
php artisan config:clear

echo 'Dropping and migrating new tables'
php artisan migrate:fresh

echo 'Seeding new data'
php artisan db:seed

echo 'Making new user'
php artisan voyager:admin admin@nettl.com

echo 'Email: admin@nettl.com'
echo 'Password: password'

echo 'Vist your app and login at localhost:8000/login'
php artisan serve
exit
