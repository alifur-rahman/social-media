<?php 
     
     $dbHost = 'localhost';
     $dbName = 'codepbxn_alifur';
     $dbUser = 'codepbxn_dbAlifur';
     $dbPassword = '@@alifur25438722@@';

 

     try {
          $pdo= new PDO("mysql:host={$dbHost};dbname={$dbName}",$dbUser,$dbPassword,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
     } catch (PDOException $e) {
          echo "Connection Error:".$e->getMessage();
     }
?>