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

## Security
Follow this guide to increase the security of the server (make sure port 80 is open): 
https://www.raspberrypi.org/documentation/configuration/security.md
