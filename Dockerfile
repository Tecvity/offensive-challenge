FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y mysql-server libapache2-mod-php git \
	php7.2 \
	php7.2-mysqli

RUN a2enmod mpm_prefork && a2enmod php7.2

WORKDIR /var/www/html/
RUN rm -rfv index.html

RUN git clone https://github.com/HFX-Co/docker-challenge . && \
	rm -rfv .git/ && \
	rm -rfv Dockerfile

RUN chown www-data:www-data /var/www/html -R 
RUN chmod 755 /var/www/html

CMD ["bash", "-c", "/bin/bash run.sh"]