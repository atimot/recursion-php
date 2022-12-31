FROM php:7.4.1-fpm-alpine3.10

RUN apk update && \
    apk add autoconf && \
    apk add gcc g++ make

RUN pecl install xdebug-3.1.6 && \
    docker-php-ext-enable xdebug

WORKDIR /var/src
