FROM ubuntu:16.04

VOLUME ["/var/www"]

RUN apt-get update && \
    apt-get install -y \
      apache2 \
      php7.0 \
      php7.0-cli \
      libapache2-mod-php7.0 \
      php-apcu \
      php-xdebug \
      php7.0-gd \
      php7.0-json \
      php7.0-mbstring \
      php7.0-xml \
      php7.0-xsl \
      php7.0-zip \
      php7.0-opcache

COPY ./.docker/apache_default /etc/apache2/sites-available/000-default.conf
COPY ./.docker/start /usr/local/bin/start
RUN chmod +x /usr/local/bin/start
RUN a2enmod rewrite

EXPOSE 80
CMD ["/usr/local/bin/start"]
