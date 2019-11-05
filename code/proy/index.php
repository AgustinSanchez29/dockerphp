<?php
//phpinfo();

if (!defined('PDO::ATTR_DRIVER_NAME')) {
  echo 'PDO is unavailable<br/>';
} elseif (defined('PDO::ATTR_DRIVER_NAME')) {
  echo 'PDO is available<br/>';
}

ini_set("display_errors", 1);
error_reporting(E_ALL);

//database credentials
define('DBHOST', 'mysql');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBNAME', 'encuestas');

try {
  $db = new PDO('mysql:host=' . DBHOST . ';port=8889;dbname=' . DBNAME, DBUSER, DBPASS);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
