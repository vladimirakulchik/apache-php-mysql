#!/bin/sh

pecl install xdebug-3.1.3
docker-php-ext-enable xdebug

cat >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini <<EOF
xdebug.client_host = host.docker.internal
xdebug.mode = develop,debug
xdebug.start_with_request = yes
xdebug.discover_client_host = false
xdebug.idekey = PHPSTORM
EOF

service apache2 reload

echo 'Done. Xdebug was installed.'
