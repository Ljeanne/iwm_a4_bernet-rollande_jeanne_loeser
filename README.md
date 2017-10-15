Init repo

Framework php : laravel
Install projetc :
 - npm install
 - composer install
 - npm run dev

Create .env:

- copy: .env.example
and modif name db, mail (if config), poort...

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

For create a controller, ressource and model:

- php artisan make:controller (ex: PhotoController) --resource --model=(ex: )Photo)

Compile scss:

- npm run dev


Opcache:

- php artisan opcache:clear

 Parms config php.ini: 
opcache.enable=1
opcache.memory_consumption=512
opcache.interned_strings_buffer=64
opcache.max_accelerated_files=32531
opcache.validate_timestamps=0
opcache.save_comments=1
opcache.fast_shutdown=0
