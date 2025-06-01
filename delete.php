<?php
session_start();
if(!isset($_SESSION['cart'])){
    header("location:cart.php");
}
var_dump($_POST);
var_dump($_SESSION);
$i=0;
if(sizeof($_SESSION['cart'])==1){
    unset($_SESSION['cart']);
}
else{
foreach($_SESSION['cart'] as $value){
    if($value->id == $_POST['remove_from_cart']){
        $res=$i;
    }
    $i++;
}
unset($_SESSION['cart'][$res]);
$_SESSION['cart']=array_values($_SESSION['cart']);
}
header("location:cart.php");
?>  