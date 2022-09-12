FROM php:8.1.0-apache

COPY ./../../ /var/www/html
COPY ./../../.docker/php-apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN apt-get update
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
