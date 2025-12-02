# Imagen base PHP + Nginx
FROM webdevops/php-nginx:8.2

# Habilitar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql zip

# Directorio de trabajo
WORKDIR /app

# Copiar todo el proyecto
COPY . /app

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Generar key (solo si no existe)
RUN php artisan key:generate || true

# Optimizar Laravel
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Puerto donde exponemos Laravel
EXPOSE 80

# Iniciar Nginx + PHP-FPM
CMD ["supervisord"]

