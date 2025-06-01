<?php
define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

session_start();

if(isset($_POST['name'])) {
    $add="INSERT INTO leads (
        id_status,
        fio,
        phone,
        email
    ) VALUES (
        '1',
        '" . $mysqli->real_escape_string($_POST['name']) . "',
        '" . $mysqli->real_escape_string($_POST['phone']) . "',
        '" . $mysqli->real_escape_string($_POST['email']) . "'
    )";
    $mysqli->query($add);
    
    $mysqli->close();
    
    header("Location:addlead.php?msg=Заявка принята!");
} else {

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
        <h2>Подать заявку</h2>
        <?php
            if(isset($_GET["msg"])){echo"<div class='error'>". $_GET["msg"]."</div>";}
        ?>
        <form action="addlead.php" method="post">
            <label for="name">ФИО:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Номер телефона:</label>
            <input type="tel" id="phone" name="phone" pattern="\+7\d{10}" required placeholder="+71234567890">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Отправить</button>
            <a href="index.php">На главную</a>
        </form>
    </div>
    <?php
    include_once ROOT . '/footer.php';
}
    