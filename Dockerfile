FROM php:8.1-apache
RUN docker-php-ext-install mysqli

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer

RUN cd /etc/apache2/mods-available
RUN a2enmod rewrite
RUN rm -f /etc/apache2/apache2.conf
COPY apache2.conf /etc/apache2