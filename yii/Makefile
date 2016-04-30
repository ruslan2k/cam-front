SHELL := /bin/bash

include .env

serve:
	php yii serve	# --port=8888

install_apt:
	sudo apt-get install \
	    php5-cli php5-gd php5-imagick php5-intl php5-mcrypt \
	    php5-memcache php5-mysql php5-mysqlnd php5-pdo php5-pgsql \
	    php5-curl
	@echo info: \
	    http://www.yiiframework.com/doc-2.0/guide-start-installation.html

backup:
	time mysqldump -h${DB_HOST} -u${DB_USERNAME} -p${DB_PASSWORD} ${DB_NAME} > _backup/${DB_NAME}-`date +%F_%T`.sql
