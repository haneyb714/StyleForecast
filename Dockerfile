
# Build frontend assets
FROM node:22-bookworm-slim AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# PHP and Laravel
FROM php:8.4-cli-bookworm

RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip libpq-dev libsqlite3-dev libicu-dev \
    libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install \
    pdo_pgsql pdo_sqlite mbstring bcmath exif pcntl intl zip xml \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .
COPY --from=frontend /app/public/build ./public/build

RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

ENV APP_ENV=production



CMD ["sh", "-c", "php artisan migrate --force -vvv 2>&1 | tee /tmp/migration.log; php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
