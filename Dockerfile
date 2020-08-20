FROM php:7.4-apache
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pgsql pdo pdo_pgsql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY sites/ /var/www/html/
EXPOSE 80