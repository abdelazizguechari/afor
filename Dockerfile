# Use an official PHP image as a base (with PHP 8.2)
FROM php:8.2-fpm

# Set working directory in the container
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer (PHP dependency manager)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the application code into the container
COPY . .

# Install PHP dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Expose the port the app runs on (8080 for Laravel's built-in server)
EXPOSE 8080

# Run Laravel's built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
