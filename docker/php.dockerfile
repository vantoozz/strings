FROM php:7.4.12-cli

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libzip-dev=1.5.1-4 \
        zip=3.0-11+b1 \
        unzip=6.0-23+deb10u1 \
        git=1:2.20.1-2+deb10u3 \
        iproute2=4.20.0-2 \
        libssl-dev=1.1.1d-0+deb10u3 \
    && pecl install xdebug-2.9.8 \
    && docker-php-ext-enable xdebug \
    && rm -rf /var/lib/apt/lists/*

COPY docker/php.ini /usr/local/etc/php/

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/ \
    && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

RUN  composer global require -v \
        squizlabs/php_codesniffer:~3 \
        sebastian/phpcpd:~5 \
        dancryer/php-docblock-checker:~1 \
        phpstan/phpstan:~0 \
        phpmd/phpmd:~2 \
        povils/phpmnd:~2 \
        vantoozz/phpcdm:~1

ENV PHP_IDE_CONFIG="serverName=docker"

COPY docker/php.entrypoint.sh /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]

WORKDIR /opt/project

CMD ["php"]
