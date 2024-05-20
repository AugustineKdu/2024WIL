# 2024WIL


<!-- Terminal Command for setup laravel -->

<!-- install composer -->
composer install

<!-- create env file from env.example -->
cp .env.example .env

<!-- add application key -->
php artisan key:generate

<!-- create db file  -->
touch database/database.sqlite

<!-- migration  -->
php artisan migrate

php artisan session:table
php artisan migrate
