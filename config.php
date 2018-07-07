<?php 

define('DB_HOST', 'localhost');
define('DB_NAME', 'WD03-project-Skouev');
define('DB_USER', 'root');
define('DB_PASS', '');

// Установка пути до корневой директории скрипта по протоколу HTTP
define('HOST', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/');
// Установка физического пути до корневой директории скрипта
define('ROOT', dirname(__FILE__) . '/');


 ?>