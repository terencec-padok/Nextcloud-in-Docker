# Nextcloud on Docker-Compose

A simple and robust Docker-Compose setup for hosting Nextcloud, the privacy oriented cloud storage.

## Install

TODO

## Migrate from an existing Nextcloud app

0. Backup your data ! You can use `rsync` with the `-aP` option to keep the file ownership/rights
1. Make a dump of your existing database. e.g : MariaDB/MySQL
```
mysqldump -u <user> -p<password> -D <database> > nextcloud.bak.sql
```
2. Save your `config.php` file and merge the informations with the config file in `config/config.php`
3. TODO