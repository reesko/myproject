<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" style="background-color: #fec901;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo.png" alt="Логотип" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Переключить навигацию">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="index.php">Главная</a>
                    </li>

                    <!-- Выпадающее меню -->
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="roomDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Категории
                        </a>
                        <div class="dropdown-menu" aria-labelledby="roomDropdown">
                            <a class="dropdown-item" href="bathroom.php">Для ванной</a>
                            <a class="dropdown-item" href="bedroom.php">Для спальни</a>
                            <a class="dropdown-item" href="kitchen.php">Для кухни</a>
                        </div>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="aboutus.php">О нас</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark d-flex align-items-center" href="cart.php">
                            Корзина
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart ml-2" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .485.379L2.89 5H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 14H4a.5.5 0 0 1-.491-.408L1.01 2H.5a.5.5 0 0 1-.5-.5zM3.14 6l1.25 6h8.22l1.25-6H3.14z"/>
                                <path d="M5.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm7 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Стили -->
<style>
    body {
        padding-top: 76px;
    }

    .nav-link {
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #333 !important;
    }

    .shadow-sm {
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15) !important;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .dropdown-item:hover {
        background-color: #f6f6f6;
    }

</style>

