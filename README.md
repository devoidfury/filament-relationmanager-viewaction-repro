

Repro:


composer install

npm install

touch database/database.sqlite

php artisan migrate

php artisan db:seed

npm run build

php artisan serve

DB_DATABASE=`realpath ./database/database.sqlite` php artisan serve

