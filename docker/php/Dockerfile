FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libzip-dev \
    libonig-dev 


RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    zip    


COPY --from=composer:latest /usr/bin/composer  /usr/bin/composer

ARG UID=1000
ARG GID=1000

RUN groupadd -g ${GID} stuxnet \
&& useradd -u ${UID} -g stuxnet -m stuxnet

WORKDIR /var/www

USER stuxnet





