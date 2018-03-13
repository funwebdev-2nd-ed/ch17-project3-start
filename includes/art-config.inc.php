<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* note: connection for cloud9 ... you will need to modify for your own environment */
$ip = getenv('IP');
$port = '3306';

define('DBCONNECTION', "mysql:host=$ip;port=$port;dbname=art;charset=utf8mb4;");
define('DBUSER', getenv('C9_USER'));
define('DBPASS', '');


spl_autoload_register(function ($class) {
    $file = 'lib/' . $class . '.class.php';
    if (file_exists($file)) 
      include $file;
});

$dbAdapter = DatabaseAdapterFactory::create('PDO', array(DBCONNECTION, DBUSER, DBPASS));

?>
