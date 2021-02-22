<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'nextcloud-redis',
    'password' => '',
    'port' => 6379,
  ),
  'instanceid' => '<id>',
  'passwordsalt' => '<salt>',
  'secret' => '<secret>',
  'trusted_domains' => 
  array (
    0 => '<domain_name>',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '21.0.0.18',
  'overwrite.cli.url' => 'http://cloud.tchateigne.fr',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '<password>',
  'installed' => true,
  'theme' => '',
  'loglevel' => 2,
  'maintenance' => false,
);
