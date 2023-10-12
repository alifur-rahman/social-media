<?php require_once('config.php');
require_once('function.php');

if (isset($_POST['email'])) {
     $email = $_POST['email'];
     $f_name = $_POST['f_name'];
     $l_name = $_POST['l_name'];
     $rg_password = $_POST['rg_password'];
     $gender = $_POST['gender'];
     $age = $_POST['age'];
     $country = $_POST['country'];
     $dateTime = date('Y-m-d H:i:s');

     $dbEmailCount = user_count('email', $email);

     if ($dbEmailCount != 0) {
          echo "error";
     } else {
          $alif = $pdo->prepare("INSERT INTO user_details(
               first_name,
               last_name,
               email,
               password,
               gender,
               age,
               country,
               reg_date_time
          ) VALUES(?,?,?,?,?,?,?,?)");
          $alif->execute(
               array(
                    $f_name,
                    $l_name,
                    $email,
                    SHA1($rg_password),
                    $gender,
                    $age,
                    $country,
                    $dateTime
               )
          );
          echo "success";
     }
}

?>