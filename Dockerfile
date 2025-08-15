# syntax=docker/dockerfile:1

FROM php:8.2-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . /var/www

# Expose application port
EXPOSE 8000

# Run Laravel development server
CMD ["bash", "-c", "composer install && php artisan serve --host=0.0.0.0 --port=8000"]
