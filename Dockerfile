FROM php:7.2.6-apache

EXPOSE 80

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update
RUN apt-get install libpng-dev curl git libyaml-dev -y
RUN pecl install yaml-2.0.0 -y && docker-php-ext-enable yaml
RUN docker-php-ext-install pdo pdo_mysql gd
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN mkdir /usr/src/app
WORKDIR /usr/src/app

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

COPY composer.json /usr/src/app
RUN composer install

COPY . /usr/src/app
RUN chown -R www-data:www-data /usr/src

RUN a2enmod rewrite
RUN service apache2 restart