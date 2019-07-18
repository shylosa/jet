<?php

define('DEBUG', 1);
define('ROOT', dirname(__DIR__));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/vendor/jet/core');
define('LIBS', ROOT . '/vendor/jet/core/libs');
define('CACHE', ROOT . '/tmp/cache');
define('CONF', ROOT . '/config');
define('LAYOUT', 'default');

//http://localhost:88/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://localhost:88/
$app_path = preg_replace('#[^/]+$#', '', $app_path);
//http://localhost:88
$app_path = preg_replace('#/$#', '', $app_path);

define('PATH', $app_path);

require_once ROOT . '/vendor/autoload.php';