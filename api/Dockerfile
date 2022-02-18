FROM php:7.4.27-apache

RUN docker-php-ext-install pdo_mysql

ENTRYPOINT ["docker-php-entrypoint"]
CMD ["apache2-foreground"]
