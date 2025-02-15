# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    pkg-config \
    unzip \
    && docker-php-ext-install pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin semua file ke dalam container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install dependencies via Composer
RUN composer install

# Expose port 8001
EXPOSE 8001

# Perintah default untuk menjalankan server
CMD ["php", "-S", "0.0.0.0:8001", "-t", "public"]
