FROM php:7.4-apache
WORKDIR /var/www/html

RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli