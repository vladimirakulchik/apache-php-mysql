FROM php:7.4.27-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

ENTRYPOINT ["docker-php-entrypoint"]
CMD ["apache2-foreground"]
