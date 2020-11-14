FROM phusion/baseimage:bionic-1.0.0

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libzip-dev \
        zip \
        unzip \
        git \
        iproute2 \
        libssl-dev \
        wget \
        libonig-dev \
        libcurl4-openssl-dev \
        autoconf bison dpkg-dev file g++ gcc libc-dev make pkg-config re2c libxml2-dev libsqlite3-dev

RUN mkdir /build \
    && cd /build \
    && wget -O php.zip https://github.com/php/php-src/archive/master.zip \
    && unzip php.zip \
    && cd php-src-master

RUN cd /build/php-src-master \
    && ./buildconf \
    && ./configure --with-openssl --enable-mbstring --with-pear --with-curl --with-zlib\
    && make -j$(nproc) \
    && make install \
    && php -v

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/ \
    && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

WORKDIR /opt/project

CMD ["php"]
