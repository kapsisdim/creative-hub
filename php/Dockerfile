FROM php:8.2-fpm

# Set environment variables
ENV PHP_XDEBUG_VERSION=3.0.4
ENV NODE_VERSION=16.13.0

# Install useful tools
RUN apt-get update && apt-get -y install --fix-missing \
        pkg-config libssl-dev \
        nano wget dialog vim curl \
        apt-utils \
        build-essential \
        git \
        libcurl4 \
        libcurl4-openssl-dev \
        libpq-dev \
        zlib1g-dev \
        libzip-dev \
        zip \
        unzip \
        libbz2-dev \
        locales \
        libmcrypt-dev \
        libicu-dev \
        libonig-dev \
        libxml2-dev

RUN docker-php-ext-install \
        exif

# Install Postgre PDO
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql opcache zip

RUN docker-php-ext-install \
exif

# Install important libraries
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
ENV NVM_DIR=/root/.nvm
RUN . "$NVM_DIR/nvm.sh" && nvm install ${NODE_VERSION}
RUN . "$NVM_DIR/nvm.sh" && nvm use v${NODE_VERSION}
RUN . "$NVM_DIR/nvm.sh" && nvm alias default v${NODE_VERSION}
ENV PATH="/root/.nvm/versions/node/v${NODE_VERSION}/bin/:${PATH}"
RUN npm install -g npm@9.2.0

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

# Install xdebug
RUN pecl install xdebug-3.2.2 \
        && docker-php-ext-enable xdebug
