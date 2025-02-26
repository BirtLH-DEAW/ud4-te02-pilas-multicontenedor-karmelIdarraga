# Creamos una imagen intermedia
FROM ubuntu:18.04 as intermedia

# Instalamos git
RUN apt-get update \
    && apt-get install -y git 
    
RUN git clone https://github.com/deaw-birt/UD4-despliegue-PHP.git /tmp/repo

FROM mysql:5.7

# Damos información sobre la imagen que estamos creando
LABEL \
    version="1.0" \
    description="mysql with scripts" \
    maintainer="kidarraga <kidarraga@birt.eus>"

# copiamos los ficheros de scripts al directorio docker-entrypoint-initdb.d
COPY --from=intermedia /tmp/repo/mysql/crearBBDD.sql /docker-entrypoint-initdb.d/1-crearBBDD.sql
COPY --from=intermedia /tmp/repo/mysql/InsertarDatos.sql /docker-entrypoint-initdb.d/2-insertarDatos.sql

EXPOSE 3306