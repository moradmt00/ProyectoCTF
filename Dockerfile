FROM php:8-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY Ejecicio1-WEB-LOGIN /var/www/html
WORKDIR /var/www/html
EXPOSE 80
