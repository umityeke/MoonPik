FROM serversideup/php:8.4-fpm-nginx

# Root yetkisine geçip SQLite kuruyoruz
USER root
RUN apt-get update && apt-get install -y sqlite3 libsqlite3-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Başlatıcı scripti kopyalayıp çalıştırılabilir yapıyoruz
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Laravel'in çalışması için standart kullanıcıya dönüyoruz
USER www-data

# Kodları kopyalıyoruz
COPY --chown=www-data:www-data . /var/www/html

# Composer kurulumunu yapıyoruz
RUN composer install --no-dev --optimize-autoloader

# Veritabanını hazırlayıp yetkilerini ayarlıyoruz
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache/data bootstrap/cache
RUN touch database/database.sqlite
RUN chmod -R 777 storage database bootstrap/cache

# Sunucu başlarken otomatik migrate etmesi için Server Side Up komutunu aktif ediyoruz
ENV AUTORUN_LARAVEL_MIGRATION=true

# Railway'in dinamik portunu Nginx'e aktaracak olan scriptimizi ana başlatıcı yapıyoruz
# EXPOSE KASITLI OLARAK SİLİNDİ: Railway Edge Proxy'nin doğrudan $PORT değişkenini kullanmasını istiyoruz.
ENTRYPOINT ["/entrypoint.sh"]
