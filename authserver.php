<?php
define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

$email_check=$mysqli->query("SELECT * FROM user WHERE email='" . $mysqli->real_escape_string($_POST['email']) . "'");
if($email_check->num_rows > 0) {
    $obj = $email_check->fetch_object();
    if(password_verify($_POST['password'],$obj->password)==true){
        if($obj->email =='admin@gmail.com'){
            if($_POST['password']=='admin'){
                session_start();
                $_SESSION["id_user"]=$obj->id_user;
                $_SESSION["admin"]=1;
                $mysqli->close();
                header("Location: tabladmin.php?page=1");
            }
        } else{
            session_start();
            $_SESSION["id_user"]=$obj->id_user;
            $_SESSION["cart"]=[];
            $mysqli->close();
            header("Location:cart.php");
        }
    } else {
        $err.='Неверный пароль. ';
    }
} else{
    $err.='Нет пользователя с таким Email.';
}
if($err!=''){
    $mysqli->close();
    header("Location:auth.php?msg=$err");
}