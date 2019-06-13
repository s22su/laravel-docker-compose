FROM php:7.3.5-fpm-alpine3.9

RUN apk update && apk --no-cache add postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www
