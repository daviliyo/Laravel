#!/usr/bin/env bash

apt-get update

#instalamos Apache

apt-get install -y apache2

rm -rf /var/www

ln -fs /vagrant /var/www

# instalamos PHP5

sudo apt-get install php5 libapache2-mod-php5 -y

# Reiniciamos el servidor web:

sudo /etc/init.d/apache2 restart

echo "ServerName localhost" | sudo tee /etc/apache2/sites-available/fqdn.conf

sudo ln -s /etc/apache2/sites-available/fqdn.conf /etc/apache2/sites-enabled/fqdn.conf

# Reiniciamos nuevamente el servidor web:

sudo /etc/init.d/apache2 restart