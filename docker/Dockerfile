FROM php:8.0-fpm as base

LABEL intermediate=true

RUN apt-get update \
  && apt-get install -y \
    build-essential \
    curl \
    git \
    gnupg \
    less \
    nano \
    vim \
    unzip \
    zip \
  && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false \
  && rm -rf /var/lib/apt/lists/* \
  && apt-get clean

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && sync \
  && install-php-extensions \
    @composer \
    exif \
    gd \ 
    memcached \
    mysqli \
    pcntl \
    pdo_mysql \ 
    mbstring \
    exif \ 
    pcntl \
    bcmath \
    zip \
  && apt-get update \
  && apt-get install -y \
    gifsicle \
    jpegoptim \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmemcached-dev \
    locales \
    lua-zlib-dev \
    optipng \
    pngquant \
  && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false \
  && rm -rf /var/lib/apt/lists/* \
  && apt-get clean

# install wp-cli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && php wp-cli.phar --info \
  && chmod +x wp-cli.phar \
  && mv wp-cli.phar /usr/local/bin/wp \
  && wp --info

# Install nodejs & supervisor
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash \
  && apt-get update \
  && apt-get install -y \
    # nginx \
    nodejs \
    supervisor \
  && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false \
  && rm -rf /var/lib/apt/lists/* \
  && apt-get clean \
  && npm install -g yarn

# Set working directory
WORKDIR /var/www/html/source/wp-content/themes/sage
# RUN chmod -R 777 storage/framework
# RUN composer install
# RUN yarn install
# RUN yarn install
# RUN wp acorn db:seed --allow-root
# USER $user
