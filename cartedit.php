<?php
session_start();
if(!isset($_SESSION['cart'])){
    header("location:cart.php");
}

foreach($_SESSION['cart'] as $key => $value){
    if($value->id == $_GET['id']){
        $_SESSION['cart'][$key]->quantity = $_GET['quantity'];
        
        break;
    }
}
header("location:cart.php");
?>  