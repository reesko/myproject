<?php

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

session_start();

$title = 'Магазин товаров для дома';

include_once ROOT . '/header.php';
include_once ROOT . '/slider.php';
?>
<!-- Категории -->
<div class="container">
    <h2>Популярные товары нашего магазина</h2>
    <div class="category">
        <h3>Для спальни</h3>
        <div class="scrolling-wrapper">
            <?php 
            $res=$mysqli->query("SELECT * FROM item WHERE room='bedroom'");
            while($row=$res->fetch_assoc())
            {echo'<div class="card"><img src="'.$row['image'].'" class="card-img-top" alt="Блюдо 1">
                <div class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5>
                    <p class="card-price">Цена:'.$row['price'].'₽</p>
                    <a class="cartbotton" href="cartserver.php?id_items='.$row['id_items'].'&rest=bedroom"><button class="btn btn-primary">Добавить в корзину</button></a>
                </div></div>';}
            ?>
        </div>
    </div>
    <div class="category">
        <h3>Для кухни</h3>
        <div class="scrolling-wrapper">
        <?php 
            $res=$mysqli->query("SELECT * FROM item WHERE room='kitchen'");
            while($row=$res->fetch_assoc())
            {echo'<div class="card"><img src="'.$row['image'].'" class="card-img-top" alt="Блюдо 1">
                <div class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5>
                    <p class="card-price">Цена:'.$row['price'].'₽</p>
                    <a class="cartbotton" href="cartserver.php?id_items='.$row['id_items'].'&rest=kitchen"><button class="btn btn-primary">Добавить в корзину</button></a>
                </div></div>';}
            ?>
        </div>
    </div>
    <div class="category">
        <h3>Для ванной</h3>
        <div class="scrolling-wrapper">
            <?php 
                $res=$mysqli->query("SELECT * FROM item WHERE room='bathroom'");
                while($row=$res->fetch_assoc())
                {echo'<div class="card"><img src="'.$row['image'].'" class="card-img-top" alt="Блюдо 1">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['name'].'</h5>
                        <p class="card-price">Цена:'.$row['price'].'₽</p>
                        <a class="cartbotton" href="cartserver.php?id_items='.$row['id_items'].'&room=bathroom"><button class="btn btn-primary">Добавить в корзину</button></a>
                    </div></div>';}
                ?>
        </div>
    </div>
</div>
<!-- Кнопка "Все товары" -->
<div class="container text-center my-5">
    <a href="allitems.php" class="btn btn-outline-primary btn-lg">
        Смотреть все товары
    </a>
</div>
<?php
include_once ROOT . '/footer.php';
    