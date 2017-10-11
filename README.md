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

If (error keys app not valid) generate a new key:
- php artisan key:generate
- after php artisan serve reload

For create a Middleware:
- php artisan make:middleware (NameYourMiddleware ex:FiltreIpMiddleware)

API The movie DB:
- https://api.themoviedb.org/discover/movie?sort_by=popularity.desc?&api_key=14549aeb10d953e4b4868c68a1955393

