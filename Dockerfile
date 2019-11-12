FROM php:5.6
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN sudo apt-get install nodejs
RUN apt-get update -y && apt-get install -y mysql-server
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
WORKDIR /app
COPY . /app
RUN npm istall
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181