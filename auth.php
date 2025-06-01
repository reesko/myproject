<?php

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

session_start();

$title = 'Магазин товаров для дома | Авторизация';

include_once ROOT . '/header.php';
?>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
}
.container {
    max-width: 400px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h2 {
    text-align: center;
}
input[type="text"],
input[type="email"],
input[type="password"],
input[type="tel"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
button:hover {
    background-color: #4cae4c;
}
.error{
    color: red;
}
</style>
<div class="container">
    <h2>Авторизация</h2>
    <?php
        if(isset($_GET["msg"])){echo"<div class='error'>". $_GET["msg"]."</div>";}
    ?>
    <form action="authserver.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Авторизоваться</button>
        <a href="registration.php">Зарегистрироваться</a></br>
        <a href="index.php">На главную</a>
    </form>
</div>
<?php
include_once ROOT . '/footer.php';