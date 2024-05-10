# CREATE PHP IMAGEM WITH COMPOSER
FROM php:8.3-fpm

# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# INSTALL DEPENDENCIES
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

CMD [ "php-fpm" ]