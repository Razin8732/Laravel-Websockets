composer create-project laravel/laravel example-app
composer require laravel/ui
php artisan ui bootstrap
php artisan ui bootstrap --auth
npm install
npm run dev
npm install resolve-url-loader@^4.0.0 --save-dev --legacy-peer-deps
composer install

C:\Windows\System32\drivers\etc\hosts

php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan config:cache
php artisan route:cache
php artisan optimize


composer require barryvdh/laravel-debugbar --dev




jQuery dataTable server side processing laravel refrence  
https://shareurcodes.com/blog/laravel%20datatables%20server%20side%20processing 

D:\xampp\htdocs\laravel-websockets\Change.md

php artisan serve --host=laravel-websockets.test
# #########################################################3
Web Socket installation start here

composer require beyondcode/laravel-websockets

php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"

php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"

composer require pusher/pusher-php-server

php artisan make:event UpdateUserTable

php artisan serve
php artisan websockets:serve

npm install laravel-echo pusher-js


<!-- From Tinker ( php artisan tinker ) -->
event(new App\Events\UpdateUserTable("need to update
table"))



# APP_URL=http://laravel-websockets.test/
# APP_PORT=8000