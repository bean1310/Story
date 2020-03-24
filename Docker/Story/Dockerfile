FROM php:7.4.4-fpm-alpine3.11

WORKDIR /tmp
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

RUN apk add --no-cache autoconf build-base nodejs npm python && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    docker-php-ext-install pdo_mysql

WORKDIR /var/www/Story

COPY ./Docker/Story/xdebug.ini /usr/local/etc/php/conf.d/
