# Download PHP image with apache and install mysqli 

FROM php:apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli