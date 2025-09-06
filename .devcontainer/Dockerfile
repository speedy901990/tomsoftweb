# Use official PHP image with Apache
FROM php:8.2-apache

# Install PHP extensions if needed
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

