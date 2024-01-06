# To install the MySQL extensions.
FROM openswoole/swoole:4.12-php8.1-alpine

RUN docker-php-ext-install mysqli pdo_mysql

WORKDIR /var/www/html

COPY ./php_src /var/www/html

CMD [ "php", "./index.php" ]