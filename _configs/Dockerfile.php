FROM php:8.5.1-fpm

COPY --from=ghcr.io/mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions intl xdebug zip @composer 

# -m -> create home
# -s -> shell acess
RUN useradd -ms /bin/bash app

WORKDIR /var/www/html

USER app