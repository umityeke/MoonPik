FROM php:8.4-apache

# Gerekli sistem paketleri, SQLite ve Apache rewrite modülünü kuruyoruz
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    unzip \
    git \
    && docker-php-ext-install pdo_sqlite \
    && a2enmod rewrite

# Composer'ı kuruyoruz
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizinini /var/www/html (Apache varsayılanı) yapıyoruz
WORKDIR /var/www/html

# Proje dosyalarını kopyalıyoruz
COPY . .

# Apache'nin varsayılan yayın klasörünü Laravel'in public klasörüne yönlendiriyoruz
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Bağımlılıkları kuruyoruz
RUN composer install --no-dev --optimize-autoloader

# Storage, cache ve SQLite veritabanı dosyalarını hazırlıyoruz
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache/data bootstrap/cache
RUN touch database/database.sqlite

# Dosya izinlerini Apache'nin (www-data) yazabileceği şekilde ayarlıyoruz
RUN chown -R www-data:www-data storage database bootstrap/cache
RUN chmod -R 775 storage database bootstrap/cache

# Başlatıcı scripti kopyalayıp yetki veriyoruz
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Her ihtimale karşı 8080 portunu açıyoruz (Script içeriden portu dinamik alıp ayarlayacak)
EXPOSE 8080

CMD ["docker-entrypoint.sh"]
