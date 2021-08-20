FROM php:7.4-apache

RUN docker-php ext-install  pdo_mysql


# FROM php:7.4-apache
# COPY site/ /var/www/html/
# EXPOSE 88