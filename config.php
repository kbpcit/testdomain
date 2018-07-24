<?php
// HTTP
define('HTTP_SERVER', 'http://klaasbakker.nl/slique/');

// HTTPS
define('HTTPS_SERVER', 'http://klaasbakker.nl/slique/');

// DIR
define('DIR_APPLICATION', '/var/www/vhosts/klaasbakker.nl/www/html/slique/catalog/');
define('DIR_SYSTEM', '/var/www/vhosts/klaasbakker.nl/www/html/slique/system/');
define('DIR_IMAGE', '/var/www/vhosts/klaasbakker.nl/www/html/slique/image/');
define('DIR_STORAGE', '/var/www/vhosts/klaasbakker.nl/oc_slique_storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql1.86id.nl');
define('DB_USERNAME', 'kbakker');
define('DB_PASSWORD', 'T0qBy#FwVL');
define('DB_DATABASE', 'kbakker');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_slique_');