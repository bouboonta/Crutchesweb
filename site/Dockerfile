FROM php:8.2-apache

# Устанавливаем mysqli
RUN docker-php-ext-install mysqli

# Копируем текущие файлы внутрь Apache
COPY . /var/www/html/

# Включаем отображение ошибок (опционально)
RUN echo "display_errors=On\nerror_reporting=E_ALL" > /usr/local/etc/php/conf.d/errors.ini
