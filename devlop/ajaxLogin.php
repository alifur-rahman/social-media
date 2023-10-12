<?php
require_once('config.php');

if (isset($_POST['username'])) {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    $alif = $pdo->prepare("SELECT password,id FROM user_details WHERE  email=?");
    $alif->execute(array($userName));
    $userCount = $alif->rowCount();

    if ($userCount == 0) {
        echo "lg error";
    } else {
        $result = $alif->fetchAll(PDO::FETCH_ASSOC);
        $dbPassword = $result[0]['password'];
        $userId = $result[0]['id'];
        $password = SHA1($password);
        if ($dbPassword != $password) {
            echo "lg error";
        } else {
            session_start();
            $_SESSION['single_user'] = $userId;
            echo "lg success";
        }
    }

}
?>