<?php
session_start();

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

$userid=$_SESSION["id_user"];
$price=$_GET['price'];
$application = ("INSERT INTO `orders` (`id_user`,`id_status`,`full_price`) VALUES ('{$userid}',1,'{$price}') ");
$res=$mysqli->query($application);
$id=$mysqli->insert_id;
foreach($_SESSION['cart'] as $value){
    $product=("SELECT * FROM `item` WHERE `id_items`=" . $value->id);
    $result = $mysqli->query($product);
    $row = $result->fetch_assoc();
    $item_order=("INSERT INTO `item_order` (`id_items`,`price`,`count`,`id_order`) VALUES ('{$row['id_items']}','{$row['price']}','{$value->quantity}','{$id}')");
    $mysqli->query($item_order);
}

$mysqli->close();

header("location:/");
?>