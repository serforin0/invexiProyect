FROM php:7.2-apache

RUN apt-get update && apt-get install -v \
&& docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmodrewrite

RUN chod 777 -R -c /var/www
