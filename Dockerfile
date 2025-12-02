FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . /app

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN php artisan key:generate

RUN php artisan config:clear

CMD ["php-fpm"]