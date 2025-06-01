<?php
define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

$err='';
$email_check=$mysqli->query("SELECT * FROM user WHERE email='" . $mysqli->real_escape_string($_POST['email']) . "'");
if($email_check->num_rows > 0) {
    $err.='Почта занята. ';
}
if ($_POST['password']!=$_POST['confirm-password']){$err.="Пароли не совпадают";}
if($err==''){
    $add="INSERT INTO user (
        name,
        phone,
        email,
        password
    ) VALUES (
        '" . $mysqli->real_escape_string($_POST['name']) . "',
        '" . $mysqli->real_escape_string($_POST['phone']) . "',
        '" . $mysqli->real_escape_string($_POST['email']) . "',
        '" . password_hash($_POST['password'],PASSWORD_DEFAULT) . "'
    )";
    $mysqli->query($add);
    
    $mysqli->close();
    header("Location:/");
} else {
    $mysqli->close();
    header("Location:registration.php?msg=Ошибка. $err");
}
?>