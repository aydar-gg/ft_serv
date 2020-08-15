#!/bin/sh
service nginx start
service php7.3-fpm start
service mysql start

mariadb -e "CREATE DATABASE wp_db DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mariadb -e "GRANT ALL ON wp_db.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "FLUSH PRIVILEGES;"

# siteurl="localhost"
# wptitle="efumiko"
# wpemail="vlasov_viktor01@mail.ru"
# wpuser="admin"
# wppass="admin"
# curl -d "weblog_title=$wptitle&user_name=$wpuser&admin_password=$wppass&admin_password2=$wppass&admin_email=$wpemail" -k https://$siteurl/wp-admin/install.php?step=2

if [[ "$1" == on || "$1" == "off"  ]]; then 
sed -i -e "s/autoindex [a-z]*/autoindex $1/" /etc/nginx/sites-available/ft_server.conf
service nginx restart 
else 
echo "incorrect input"
fi

sleep infinity &
wait
