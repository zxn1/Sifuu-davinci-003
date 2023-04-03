FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install pdo_mysql zip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

WORKDIR /var/www/html

CMD php-fpm