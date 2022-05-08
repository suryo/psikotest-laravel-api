# PSIKOTEST-LARAVEL API
## Install

1. git clone https://github.com/suryo/psikotest-laravel-api
2. composer install
3. copy .env.example to .env
4. php artisan key:generate
5. php artisan serve
6. dump db_vis.sql

## Check Route
php artisan route:list

## CREATE NEW Branch
git checkout -b nama_branch

## Endpoint
### USER
* POST :: /api/user
* GET :: /api/user
* GET :: /api/userlogin/?username=ali&pwd=ali123
* PUT :: /api/user/2

### PAPI
* POST :: /api/papi
* GET :: /api/papi
* GET :: /api/papi
* PUT :: /api/papi/2

## Membuat Model

php artisan make:model riasec_model -m
example
-r menandakan membuat model beserta controller
php artisan make:model tiu_model -r 

## Membuat Resource

php artisan make:resource nama_resource
example :
php artisan make:resource RiasecResource

## Membuat Controller
php artisan make:controller Api\RiasecController -r 

## Check Route
php artisan route:list

## API DOCUMENTATION
1. install composer require "darkaonline/l5-swagger"
2. run php artisan l5-swagger:generate
3. run php artisan serve
4. open url -> http://127.0.0.1:8000/api/documentation
