FROM php:7.2-fpm

USER root

#install extensions
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        zlib1g-dev \
        libicu-dev \
        g++ \
        curl \
    && docker-php-ext-configure gd \
    && docker-php-ext-configure intl \
    && docker-php-ext-install zip \
    && docker-php-ext-install json \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install opcache \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) gd

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

USER www-data
