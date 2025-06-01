<?php

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

session_start();

$title = 'Магазин товаров для дома | Кухня';

include_once ROOT . '/header.php';
include_once ROOT . '/slider.php';
?>
<div class="category">
    <h3 class="classname">Для кухни</h3>
    <div class="scrolling-wrapper">
    <?php 
        $res=$mysqli->query("SELECT * FROM item WHERE room='kitchen'");
        while($row=$res->fetch_assoc())
        {echo'<div class="card"><img src="'.$row['image'].'" class="card-img-top" alt="Блюдо 1">
        <div class="card-body">
        <h5 class="card-title">'.$row['name'].'</h5>
        <p class="card-price">Цена:'.$row['price'].'₽</p>
        <a class="cartbotton" href="cartserver.php?id_items='.$row['id_items'].'"><button class="btn btn-primary">Добавить в корзину</button></a>
        </div></div>';}
    ?>
    </div>
</div>
<?php
include_once ROOT . '/footer.php';