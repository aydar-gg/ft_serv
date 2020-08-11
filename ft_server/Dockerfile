FROM debian:buster

#include

RUN apt-get -y update && apt-get -y upgrade

RUN apt-get install -y nginx \
    wget vim curl\
    mariadb-server \
    php-fpm php-mysql \
    php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi \
    php-curl php-intl php-mbstring php-soap php-xmlrpc

WORKDIR /var/www/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz && \
wget https://wordpress.org/latest.tar.gz

RUN tar -xvzf phpMyAdmin-5.0.2-all-languages.tar.gz && tar -xzvf latest.tar.gz && \
mv phpMyAdmin-5.0.2-all-languages wordpress/phpmyadmin && \
rm phpMyAdmin-5.0.2-all-languages.tar.gz latest.tar.gz

COPY ./srcs/ft_server.conf /etc/nginx/sites-available/
RUN ln -s /etc/nginx/sites-available/ft_server.conf /etc/nginx/sites-enabled/

COPY ./srcs/config.inc.php /var/www/phpmyadmin
RUN chown -R www-data:www-data /var/www/wordpress/phpmyadmin && \
chown -R www-data:www-data /var/www/wordpress && \
chmod 777 -R /var/www/*

#ssl
COPY ./srcs/ssl/nginx-selfsigned.key /etc/ssl/private/
COPY ./srcs/ssl/nginx-selfsigned.crt /etc/ssl/certs/
COPY ./srcs/ssl/dhparam.pem /etc/nginx/
COPY ./srcs/ssl/self-signed.conf /etc/nginx/snippets/
COPY ./srcs/ssl/ssl-params.conf /etc/nginx/snippets/

EXPOSE 80 443

CMD ["bash", "start.sh"]
