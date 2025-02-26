FROM ubuntu/apache2:2.4-22.04_beta

# Da información sobre la imagen que estamos creando
# Podemos usar la \ para encadenar todos los valores
LABEL \
	authors="kidarraga" \
	version="1.0" \
	description="Ubuntu + Apache2" \
	creationDate="20-02-2025"

RUN apt-get update && apt-get install -y apache2 git wget \
    && apt-get -y install libapache2-mod-fcgid \
    && a2enmod proxy_fcgi

COPY 000-default.conf /etc/apache2/sites-available
COPY index.php /var/www/html


RUN git clone https://github.com/deaw-birt/UD4-despliegue-PHP.git /tmp/repo \
    && mkdir /var/www/html/php-karmel \
    && mv /tmp/repo/php/* /var/www/html/php-karmel

RUN mkdir /var/www/html/wordpress \
    && cd /tmp \
    && wget http://wordpress.org/latest.tar.gz \
    && tar xfz latest.tar.gz \
    && mv wordpress/* /var/www/html/wordpress/ \
    && chmod 777 -R /var/www/html/wordpress



COPY wp-config.php /var/www/html/wordpress

EXPOSE 80