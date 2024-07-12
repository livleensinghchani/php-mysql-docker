# Download PHP image with apache and install pdo 

FROM php:apache

# Install PDO MYSQL
RUN docker-php-ext-install pdo pdo_mysql  

# ENABLE PDO MYSQL
RUN docker-php-ext-enable pdo pdo_mysql