<?php

$dbHost = 'localhost';
$dbName = 'social_media';
$dbUser = 'root';
$dbPassword = '';

try {
     $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
     echo "Connection Error:" . $e->getMessage();
}
?>