
FROM php:8.1-apache
WORKDIR .

RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql mysqli \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# COPY . /var/www/html
# RUN chown -R www-data:www-data /var/www/html

# EXPOSE 80
# EXPOSE 8181