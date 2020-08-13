#!/bin/bash
service nginx start
service php7.3-fpm start
service mysql start
mariadb -e "CREATE DATABASE wp_db;"
mariadb -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "FLUSH PRIVILEGES;"
sleep infinity &
wait
