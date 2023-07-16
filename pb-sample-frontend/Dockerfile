#
# Frontend (Debian 11 Bullseye)
#
FROM node:16-bullseye as frontend

RUN mkdir -p /tmp/public

COPY resources/css/ /tmp/resources/css/
COPY resources/js/ /tmp/resources/js/
COPY package.json package-lock.json vite.config.js  /tmp/

WORKDIR /tmp

RUN npm install
# Build will generate public/build
RUN npm run build 

#
# Application (Debian 11 Bullseye)
#
FROM php:8.2-apache-bullseye as production


# Copy apache and php config for Laravel and  enable sites
COPY ./docker/000-default.conf  /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf 
#COPY ./docker/php.ini /usr/local/etc/php/php.ini

# enable apache modules
RUN a2enmod rewrite

#RUN docker-php-ext-install pdo pdo_mysql sockets

COPY . /var/www/html
COPY .env.docker /var/www/html/.env
#COPY --from=vendor /tmp/vendor/ /var/www/html/vendor/
COPY --from=frontend /tmp/public/build/ /var/www/html/public/build/

RUN chown -R www-data:www-data /var/www/html/*
