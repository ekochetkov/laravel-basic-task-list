# Common

`php artisan serve`
`php artisan config:clear`
`php artisan cache:clear`
`php artisan route:clear`
`php artisan view:clear`
`php artisan optimize`

# Installing laravel

1. `composer global require laravel/installer`
2. `laravel new laravel-basic-task-list`

## Prepping The Database

Create database and user

CREATE DATABASE laravel_btl;
CREATE USER 'laravel_btl'@'localhost' IDENTIFIED BY 'laravel_btl';
GRANT ALL PRIVILEGES ON laravel_btl . *  TO 'laravel_btl'@'localhost';
FLUSH PRIVILEGES;

Set connection params in .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_btl
DB_USERNAME=laravel_btl
DB_PASSWORD=laravel_btl

Database Migrations

`php artisan make:migration create_tasks_table --create=tasks` => `2020_09_02_050132_create_tasks_table.php`

Migration start

`php artisan migrate`

## Models

Make task model

`php artisan make:model Task` => `app/Task.php`

