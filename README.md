## Vocation
Praction with Laravel's exception handling with rendering error pages(from existed views), logging exceptions
logging login, logout events, middleware.

## Description
In project is handled exceptions in this cases:
* when user tried to open secured by middleware route (when he is not authorized)
* when user tried to open page that is not exists (for example next from the last page)
* when user entered invalid credentials
In that cases user takes rendered error page, accordingly:
* 401, Unauthorized
* 404, Not found
* 403, Forbidden

Project logs happened exceptions and login/logout events to file laravel.log, according to project
settings, which has set to log in stack(as default).

## How to run
* clone the repository
* ```docker-compose up -d```
* ```docker exec -it 51_php-apache_1 bash```
* ```php artisan migrate:fresh --seed```
* open http://localhost
* input credentials: email is johns.audra@example.net, password is password


