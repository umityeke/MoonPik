FROM php:8.4-cli

# Gerekli sistem paketlerini ve SQLite için PDO eklentisini kuruyoruz
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    unzip \
    git \
    && docker-php-ext-install pdo_sqlite pcntl

# Composer kuruyoruz
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizinini ayarlıyoruz
WORKDIR /var/www

# Proje dosyalarını kopyalıyoruz
COPY . .

# Sadece production (gerekli) PHP bağımlılıklarını kuruyoruz
RUN composer install --no-dev --optimize-autoloader

# SQLite veritabanı dosyasını ve log dizinlerini oluşturuyoruz
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache/data bootstrap/cache
RUN touch database/database.sqlite

# Dosya izinlerini ayarlıyoruz ki Laravel hata vermeden yazabilsin
RUN chown -R www-data:www-data storage database bootstrap/cache
RUN chmod -R 775 storage database bootstrap/cache

# Railway PORT env değişkenini verir, biz de PHP'nin dahili sunucusunu o portta başlatırız
CMD php artisan migrate --force && php -S 0.0.0.0:${PORT:-8080} -t public
