#!/bin/bash
set -e

# Veritabanı tablolarını oluştur
php artisan migrate --force

# PHP-FPM'i arkaplanda başlat
php-fpm &

# Nginx'i ön planda başlatarak uygulamanın Railway'e yanıt vermesini sağla
exec nginx -g "daemon off;"
