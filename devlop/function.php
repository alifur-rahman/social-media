<?php require_once('config.php');

function user_count($sect,$val){
     global $pdo;
     $alif = $pdo->prepare("SELECT $sect FROM user_details WHERE email=?");
     $alif->execute(array($val));
     $result = $alif->rowCount();
     return $result;
}
// echo user_count('email','alifurcodedr@gmail.com');
?>
