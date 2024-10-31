

Repro:


composer install

npm install

touch database/database.sqlite

php artisan migrate

php artisan db:seed

npm run build

php artisan serve

DB_DATABASE=`realpath ./database/database.sqlite` php artisan serve

In a chrome browser, open the site; then click on Customers, click any row to go to edit page, and in the relationmanager for notes, click View on any record. Now try to highlight text.

