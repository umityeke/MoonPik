FROM serversideup/php:8.4-fpm-nginx

# DİKKAT: Railway ayarlarında "Target port" 8000 olarak sabitlendiği için,
# Nginx'i ve Docker'ı açıkça 8000 portunu dinlemeye zorluyoruz!
ENV NGINX_WEB_PORT=8000
EXPOSE 8000

# Gerekli kurulumlar
USER root
RUN apt-get update && apt-get install -y sqlite3 libsqlite3-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Dosyaları aktarıyoruz
USER www-data
COPY --chown=www-data:www-data . /var/www/html

# Composer ile kurulum
RUN composer install --no-dev --optimize-autoloader

# Klasör ve veritabanı ayarları
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache/data bootstrap/cache
RUN touch database/database.sqlite
RUN chmod -R 777 storage database bootstrap/cache

# Migration işlemi
ENV AUTORUN_LARAVEL_MIGRATION=true
