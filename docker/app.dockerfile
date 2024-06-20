FROM php:8.2.19RC1-fpm-alpine

RUN set -ex \
	&& apk add --update --no-cache \
		postgresql-dev \
        git libzip-dev zlib-dev zip freetype \
		libpng libjpeg-turbo freetype-dev \
		libpng-dev libjpeg-turbo-dev libwebp-dev 
	
RUN docker-php-ext-install pdo_pgsql pdo_mysql gd zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir -p /var/www/app/vendor

WORKDIR /var/www/app

COPY . .

RUN chown -R www-data:www-data storage/ bootstrap/ public/ vendor/

USER www-data
