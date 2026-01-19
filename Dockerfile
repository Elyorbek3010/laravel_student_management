FROM php:8.2-apache

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf

# Enable Apache rewrite
RUN a2enmod rewrite

# Install system dependencies including Node.js
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install NPM dependencies and build assets
RUN npm install
RUN npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache

RUN touch /var/www/html/database/database.sqlite

# Set permissions BEFORE migrations
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
RUN chmod -R 775 storage bootstrap/cache database
RUN chmod 664 /var/www/html/database/database.sqlite

# Run migrations
RUN php artisan migrate --force

# Expose port
EXPOSE 80