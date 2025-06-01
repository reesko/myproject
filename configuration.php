<?php

define('DB_HOSTNAME', 'MySQL-8.0');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');     
define('DB_DATABASE', 'dump');  

$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($mysqli->connect_error) {
    die('Ошибка подключения: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');
$mysqli->query("SET sql_mode=''");
$mysqli->query("SET innodb_strict_mode=0");