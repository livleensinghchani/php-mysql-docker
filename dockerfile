# Download PHP image with apache and install mysqli 

FROM php:apache
RUN docker-php-ext-install pdo && docker-php-ext-enable pdo