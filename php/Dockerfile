FROM php:7.4-apache

COPY ./php/000-default.conf /etc/apache2/sites-available/

RUN apt-get update && apt-get install -y nano \
    apt-utils \
    unzip

RUN a2enmod rewrite

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && apt-get install nodejs

RUN curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | gpg --dearmor | tee /usr/share/keyrings/yarnkey.gpg >/dev/null  \
    && echo "deb [signed-by=/usr/share/keyrings/yarnkey.gpg] https://dl.yarnpkg.com/debian stable main" | tee /etc/apt/sources.list.d/yarn.list  \
    && apt-get update && apt-get install yarn

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install mysqli

COPY --from=composer /usr/bin/composer /usr/bin/composer
