FROM ubuntu:18.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt update

RUN apt install -y \
    apache2 \
    php \
    libapache2-mod-php

RUN echo 'root:Docker!' | chpasswd

COPY flag /flag.txt

# running apache as the www-data
RUN chown -R www-data:www-data /var/www
RUN chown -R www-data:www-data /var/log/apache2
RUN chown -R www-data:www-data /var/run/apache2

# making sure no deletes the file
RUN chown root:root /flag.txt
RUN chmod 444 /flag.txt

EXPOSE 80

USER www-data 

ENTRYPOINT service apache2 start && /bin/sh
