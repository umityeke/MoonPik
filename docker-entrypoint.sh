#!/bin/bash
set -e

# Run Laravel migrations
php artisan migrate --force

# Extract PORT from env or use 8080
LISTEN_PORT=${PORT:-8080}

# Update Apache to listen on the dynamic port Railway assigns
sed -i "s/Listen 80/Listen ${LISTEN_PORT}/g" /etc/apache2/ports.conf
sed -i "s/:80/:${LISTEN_PORT}/g" /etc/apache2/sites-available/000-default.conf

# Start Apache in foreground
exec apache2-foreground
