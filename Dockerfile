FROM php:8.2-apache

# Set the working directory inside the container

WORKDIR /var/www/html

# Copy the CodeIgniter project files to the container

COPY . .

# Install required PHP extensions and enable Apache modules

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update && \
apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
docker-php-ext-install gd

RUN a2enmod rewrite

# Expose port 80 for Apache

EXPOSE 80