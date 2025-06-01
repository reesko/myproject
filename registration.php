<?php

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

session_start();

$title = 'Магазин товаров для дома | Регистрация';

include_once ROOT . '/header.php';
?>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    /*padding: 20px;*/
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
    <h2>Регистрация</h2>
    <?php
        if(isset($_GET["msg"])){echo"<div class='error'>". $_GET["msg"]."</div>";}
    ?>
    <form action="registr.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Номер телефона:</label>
        <input type="tel" id="phone" name="phone" pattern="\+7\d{10}" required placeholder="+71234567890">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Подтверждение пароля:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <button type="submit">Зарегистрироваться</button>
        <a href="auth.php">Войти</a></br>
        <a href="index.php">На главную</a>
    </form>
</div>
<?php
include_once ROOT . '/footer.php';
    