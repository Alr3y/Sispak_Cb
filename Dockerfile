FROM php:8.0-apache

RUN docker-php-ext-install mysqli && a2enmod rewrite

COPY apache.conf /etc/apache2/conf-available/app.conf

RUN a2enconf app
