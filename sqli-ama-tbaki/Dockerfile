# Origin image
FROM ubuntu:18.04

ARG DEBIAN_FRONTEND=noninteractive
# update
RUN apt update
RUN apt install -y wget
RUN sh -c '. /etc/os-release; wget "https://mirrors.ustc.edu.cn/repogen/conf/ubuntu-http-4-${UBUNTU_CODENAME}" -O /etc/apt/sources.list'
RUN apt update

# Setup Server Environment
RUN apt install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql

EXPOSE 80
# Entry point
ENTRYPOINT service apache2 start && /bin/bash
