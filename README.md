# LampExample

## Author
Deepak Ramalingam

## Install Required Packages
Update packages
```sh
sudo apt update
```
Upgrade packages
```sh
sudo apt-get upgrade -y
```
Install apache2 package
```sh
sudo apt install apache2 -y
```
Install php
```sh
sudo apt install php libapache2-mod-php -y
```
Install MySQL
```sh
sudo apt-get install mariadb-server mariadb-client php-mysql -y
```
Install phpMyAdmin (select apache2 server, say yes, and enter a password)
```sh
sudo apt-get install phpmyadmin -y
```
Reboot
```sh
sudo reboot
```
Add phpMyAdmin to apache configuration
```sh
sudo nano /etc/apache2/apache2.conf
```
Add the following line to the end of the file
```sh
Include /etc/phpmyadmin/apache.conf
```
Reboot again
```sh
sudo reboot
```
Change root user for phpMyAdmin
```sh
sudo mysql --user=root
```
Change root user for phpMyAdmin
```sh
sudo mysql --user=root
```
Replace 'password' with the password you want
```sh
DROP USER 'root'@'localhost';
CREATE USER 'root'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
```

## Fixing phpMyAdmin Error (optional, but recommended)
Go to line 613 of the sql.lib.php file
```sh
sudo nano +613 /usr/share/phpmyadmin/libraries/sql.lib.php
```
Replace
```sh
|| (count($analyzed_sql_results['select_expr'] == 1)
```
With
```sh
|| ((count($analyzed_sql_results['select_expr']) == 1)
```

## Setup
Navigate to apache2 web directory
```sh
cd /var/www/html
```
Delete index.html default file
```sh
sudo rm index.html
```
Login as root
```sh
sudo su
```
Initialize a GitHub repo
```sh
git init
```
Add this repo
```sh
git remote add origin https://github.com/rdeepak2002/LampExample.git
```
Pull the code
```sh
git pull origin master
```
Create a database named 'test' with a table called 'users' that has three text columns: id, name, and email by referring to this website:
http://webvaultwiki.com.au/Create-Mysql-Database-User-Phpmyadmin.ashx

Create a user with the username 'test' and password 'password', then give the user full access to the 'users' table in the 'test' database

Finally, reboot and visit the ip address of the machine
```sh
sudo reboot
```

## Security
Follow this guide to increase the security of the server (make sure port 80 is open):
https://www.raspberrypi.org/documentation/configuration/security.md
