FROM php:8.2.1-fpm-alpine

ARG PHALCON_VERSION=5.1.4

RUN set -xe && \
        apk add --no-cache --virtual .build-deps \
            autoconf \
            g++ \
            make \
        && \
        docker-php-source extract && \
        # Install ext-phalcon
        curl -LO https://github.com/phalcon/cphalcon/archive/v${PHALCON_VERSION}.tar.gz && \
        tar xzf ./v${PHALCON_VERSION}.tar.gz && \
		cd cphalcon-${PHALCON_VERSION}/build/phalcon \
        docker-php-ext-install -j $(getconf _NPROCESSORS_ONLN) .\
		cd ../../.. \
        # Remove all temp files
        rm -r \
            /v${PHALCON_VERSION}.tar.gz \
            /cphalcon-${PHALCON_VERSION} \
        && \
        docker-php-source delete && \
        apk del .build-deps && \
        php -m

COPY docker-phalcon-* /usr/local/bin/
WORKDIR /opt/app

