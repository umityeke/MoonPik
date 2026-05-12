#!/bin/sh

# Run migrations safely
php artisan migrate --force

# Listen on PORT provided by Railway, or default to 8080
LISTEN_PORT=${PORT:-8080}

echo "Starting PHP built-in server on port $LISTEN_PORT..."

# Use exec to replace the shell process with PHP, fixing signal handling
exec php -S 0.0.0.0:$LISTEN_PORT -t public
