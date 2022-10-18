FROM php:8-fpm
RUN apt update
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions curl fileinfo gd json mbstring mysqli session zlib simplexml xml intl zip exif ldap bz2

