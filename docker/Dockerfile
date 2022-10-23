FROM php:7.4-apache

RUN apt-get update; \
    apt-get install -y wget git default-mysql-client zlib1g-dev

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd mbstring zip xdebug mysqli @composer

COPY ./page.conf /etc/apache2/sites-available/page.conf

RUN a2dissite 000-default.conf; \
    a2ensite page.conf; \
    a2enmod rewrite;

VOLUME /var/www/html/
VOLUME /root/.ssh

RUN chmod -f 700 /root/.ssh/id_rsa || exit 0

ENTRYPOINT cd /var/www/html; \
    composer update; \
    apache2-foreground

