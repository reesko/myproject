<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (isset($_GET['id_items'])) {
    $id_items = $_GET['id_items'];

    // Добавляем товар в корзину
    $_SESSION['cart'][] = (object) [
        'id' => $id_items,
        'quantity' => 1
    ];
}

header("Location: cart.php");

?>