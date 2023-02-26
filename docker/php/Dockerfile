FROM php:7.4-fpm

# composerのインストール (マルチステージビルド)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# npmのインストール (マルチステージビルド)
COPY --from=node:12.14 /usr/local/bin /usr/local/bin
COPY --from=node:12.14 /usr/local/lib /usr/local/lib

WORKDIR /var/www/html/laravel

RUN apt-get update && apt-get install -y  \
  git\
  zip\
  unzip \
  libonig-dev libzip-dev libpng-dev libjpeg62-turbo-dev \
  &&  curl -sL https://deb.nodesource.com/setup_15.x | bash - \
  && apt-get install -y nodejs \
  && docker-php-ext-install pdo_mysql bcmath \
  sockets \
  && docker-php-ext-configure gd --with-jpeg\
  && docker-php-ext-install -j$(nproc) gd\
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*\