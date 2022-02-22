#!/bin/sh

pecl uninstall xdebug
rm -f /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
service apache2 reload

echo 'Done. Xdebug was uninstalled.'
