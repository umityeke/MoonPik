#!/bin/bash
set -e

# Railway'in atadığı dinamik portu al (yoksa 8080 kullan)
LISTEN_PORT=${PORT:-8080}

# Nginx config dosyasındaki portu dinamik olarak Railway'in istediği porta çevir
sed -i "s/listen 8080;/listen ${LISTEN_PORT};/g" /etc/nginx/sites-available/default
sed -i "s/listen \[::\]:8080;/listen \[::\]:${LISTEN_PORT};/g" /etc/nginx/sites-available/default

# Veritabanı tablolarını oluştur
php artisan migrate --force

# PHP-FPM'i arkaplanda başlat
php-fpm &

# Nginx'i ön planda başlatarak uygulamanın Railway'e yanıt vermesini sağla
exec nginx -g "daemon off;"
