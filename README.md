Init repo

Framework php : laravel
Install projetc :
 - npm install
 - composer install
 - npm run dev

Start server :

- php artisan serve

(if your is here mac, must edit .env:
  - add Db_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock)
 Migrade db :
- php artisan migrate

Server mail local :
- npm install -g maildev

- port 1025


For create a Middleware:
- php artisan make:middleware (NameYourMiddleware ex:FiltreIpMiddleware)