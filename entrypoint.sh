#!/bin/bash
# Railway dinamik olarak bir $PORT değişkeni atar.
# Server Side Up imajı ise Nginx portunu $NGINX_WEB_PORT ile belirler.
# Nginx'in kesinlikle Railway'in beklediği portu dinlemesi için bunu eşitliyoruz.
export NGINX_WEB_PORT=${PORT:-8080}

# Orijinal Server Side Up başlatıcı scriptini (S6 overlay) çalıştırıyoruz.
exec /init "$@"
