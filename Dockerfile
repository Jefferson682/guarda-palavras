FROM php:fpm

# Install system dependencies
RUN apt-get update


# Install PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Set working directory
WORKDIR /var/www
