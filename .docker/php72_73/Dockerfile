ARG PHP_VERSION
FROM php:${PHP_VERSION}-cli

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring

# For consistent mime type file guesser
RUN set -eux; \
  distFilePath=`which file`; \
  \
  mv ${distFilePath} ${distFilePath}.dist; \
  { \
    echo '#! /bin/sh -eu'; \
    echo ''; \
    echo "${distFilePath}"'.dist "$@" | sed -e s,application/x-pie-executable,application/x-executable,g'; \
  } | tee ${distFilePath}; \
  \
  chmod +x ${distFilePath}; \
  \
  file /bin/ls --mime | grep application/x-executable; \
  :;
