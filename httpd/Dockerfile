# Creamos una imagen intermedia
FROM ubuntu:18.04 as intermedia

# Instalamos git
RUN apt-get update && apt-get install -y apache2 git wget
RUN git clone https://github.com/deaw-birt/UD4-despliegue-PHP.git /tmp/repo
RUN cd /tmp \
    && wget http://wordpress.org/latest.tar.gz \
    && tar xfz latest.tar.gz


FROM httpd:2.4

# Da información sobre la imagen que estamos creando
# Podemos usar la \ para encadenar todos los valores
LABEL \
	authors="kidarraga" \
	version="1.0" \
	description="Apache2" \
	creationDate="20-02-2025"

# RUN apt-get update && apt-get install -y libapache2-mod-fcgid \
#     && a2enmod proxy_fcgi

COPY httpd.conf /usr/local/apache2/conf/httpd.conf
COPY index.php /usr/local/apache2/htdocs/index.php
RUN mkdir /usr/local/apache2/htdocs/php \
    && mkdir /usr/local/apache2/htdocs/wordpress

COPY --from=intermedia /tmp/repo/php/* /usr/local/apache2/htdocs/php
COPY --from=intermedia /tmp/wordpress/* /usr/local/apache2/htdocs/wordpress
COPY wp-config.php /usr/local/apache2/htdocs/wordpress

EXPOSE 80