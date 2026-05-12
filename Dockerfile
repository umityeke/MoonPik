FROM php:8.4-fpm

# Nginx, SQLite ve gerekli eklentileri kuruyoruz
RUN apt-get update && apt-get install -y \
    nginx \
    libsqlite3-dev \
    unzip \
    git \
    && docker-php-ext-install pdo_sqlite pcntl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer'ı kuruyoruz
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizinini ayarlıyoruz
WORKDIR /var/www/html

# Kodları kopyalıyoruz
COPY . .

# Sadece production paketlerini kuruyoruz
RUN composer install --no-dev --optimize-autoloader

# Klasörleri oluşturup, izinleri en geniş hale (777) getiriyoruz ki yazma sorunu olmasın
RUN mkdir -p database storage/framework/sessions storage/framework/views storage/framework/cache/data bootstrap/cache
RUN touch database/database.sqlite
RUN chmod -R 777 storage database bootstrap/cache

# Nginx ayar dosyasını doğrudan oluşturuyoruz (Geçici olarak 8080'i dinler, start.sh değiştirecek)
RUN echo 'server {\n\
    listen 8080;\n\
    root /var/www/html/public;\n\
    index index.php index.html;\n\
    location / {\n\
        try_files $uri $uri/ /index.php?$query_string;\n\
    }\n\
    location ~ \\.php$ {\n\
        include snippets/fastcgi-php.conf;\n\
        fastcgi_pass 127.0.0.1:9000;\n\
    }\n\
}' > /etc/nginx/sites-available/default

# Başlatıcı scripti kopyalayıp çalıştırılabilir yapıyoruz
COPY start.sh /start.sh
RUN chmod +x /start.sh

# EXPOSE ve ENV PORT değerlerini KASITLI OLARAK sildik çünkü Railway bu değeri dışarıdan anlık olarak $PORT değişkeniyle veriyor.
# Eğer biz buraya 8080 yazarsak, Railway o dinamik portu yok sayıp 8080'i dinliyor sanıyor ve sitenin dış bağlantısını tamamen kesiyor (TLS timeout).

CMD ["/start.sh"]
