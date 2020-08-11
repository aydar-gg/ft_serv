#!/bin/bash
sudo mariadb
mariadb -e "CREATE DATABASE wp_db;"
mariadb -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "FLUSH PRIVILEGES;"
sudo service php7.3-fpm.service restart
sudo service nginx restart
