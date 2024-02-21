FROM php:8.2.4

WORKDIR /var/www/html


RUN apt-get update && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install zip


RUN if command -v a2enmod; then a2enmod rewrite; fi


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


COPY . .


RUN composer install --optimize-autoloader --no-dev


RUN php artisan key:generate


RUN php artisan storage:link && \
    php artisan config:cache && \
    php artisan route:cache && \
    chown -R www-data:www-data storage bootstrap/cache


