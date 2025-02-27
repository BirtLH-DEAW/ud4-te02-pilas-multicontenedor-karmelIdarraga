FROM ubuntu:18.04

RUN apt-get update && apt-get install -y apache2 git wget \
    && apt-get -y install libapache2-mod-fcgid \
    && a2enmod proxy_fcgi

COPY 000-default.conf /etc/apache2/sites-available
COPY index.php /var/www/html


RUN git clone https://github.com/deaw-birt/UD4-despliegue-PHP.git /tmp/repo \
    && mkdir /var/www/html/php \
    && mv /tmp/repo/php/* /var/www/html/php

RUN mkdir /var/www/html/wordpress \
    && cd /tmp \
    && wget http://wordpress.org/latest.tar.gz \
    && tar xfz latest.tar.gz \
    && mv wordpress/* /var/www/html/wordpress/ \
    && chmod 777 -R /var/www/html/wordpress



COPY wp-config.php /var/www/html/wordpress

EXPOSE 80
CMD ["apachectl", "-D", "FOREGROUND"]