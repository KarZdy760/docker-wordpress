FROM php:8.2.15-fpm-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql

