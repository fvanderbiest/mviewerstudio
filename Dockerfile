FROM php:7.2-apache

EXPOSE 80

WORKDIR /app

COPY /docker /
COPY /srv .
COPY /pub .

RUN a2enconf z-app

#RUN chown www-data conf
RUN mkdir /mnt/studio_configs && \
    chmod a+rwx /mnt/studio_configs

VOLUME [ "/mnt/studio_configs" ]
