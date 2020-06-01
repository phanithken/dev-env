FROM php:7.3-fpm
RUN docker-php-ext-install mysqli
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer