FROM php:latest

RUN apt update

# Download docker-php-extension-installer and turn that executable
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

RUN install-php-extensions @composer

ARG UNAME=davi

RUN adduser $UNAME
USER $UNAME
