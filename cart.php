<?php
session_start();

// Инициализация корзины (пример)
if (isset($_POST['add_to_cart'])) {
    $dish_id = $_POST['dish_id'];
    $dish_name = $_POST['dish_name'];
    $dish_price = $_POST['dish_price'];
    $dish_image = $_POST['dish_image'];
    // Логика добавления в сессию — при необходимости
}

// Удаление товара из корзины
if (isset($_POST['remove_from_cart'])) {
    $dish_id = $_POST['dish_id'];
    unset($_SESSION['cart'][$dish_id]);
}

$price = 0;

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';
$title = 'Магазин товаров для дома | Корзина';
include_once ROOT . '/header.php';
?>

<!-- Подключение Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    tr {
        display: flex;
        justify-content: space-around;
    }
    thead {
        border-bottom: 1px black solid;
    }
    td {
        width: 100%;
        text-align: center;
        align-items: center;
    }
</style>

<div class="b_logout text-end p-3">
    <?php 
        echo (isset($_SESSION['id_user']) 
            ? '<a class="btn btn-danger" href="logout.php">Выйти</a>' 
            : '<a class="btn btn-success" href="auth.php">Войти</a>'); 
    ?>
</div>

<!-- Корзина -->
<div class="container mt-5">
    <h2>Ваша корзина</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td>Изображение</td>
                    <td>Название</td>
                    <td>Цена</td>
                    <td>Количество</td>
                    <td>Итого</td>
                </tr>
                <?php if (empty($_SESSION['cart'])): ?>
                    <tr>
                        <td colspan="6" class="text-center">Корзина пуста</td>
                    </tr>
                <?php else:
                    foreach ($_SESSION['cart'] as $key) {
                        $id = $key->id;
                        $res = $mysqli->query("SELECT * FROM item WHERE id_items='{$id}'");
                        $row = $res->fetch_assoc();

                        echo "<tr>
                            <td><img src='" . $row['image'] . "' class='img-fluid' style='width: 100px;'></td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['price'] . "₽</td>
                            <td class=\"cart-quantity\">
                                <center><input type='number' min='1' value='" . $key->quantity . "' disabled class='form-control' style='width: 80px;'></center>
                                " . (($key->quantity > 1) ? '<a href="cartedit.php?id=' . $row['id_items'] . '&quantity=' . ($key->quantity - 1) . '">-</a>' : '') . "
                                <a href=\"cartedit.php?id=" . $row['id_items'] . "&quantity=" . ($key->quantity + 1) . "\">+</a>
                            </td>
                            <td>
                                " . ($row['price'] * $key->quantity) . "₽<br/>
                                <form action='delete.php' method='POST'>
                                    <button type='submit' name='remove_from_cart' value='" . $row['id_items'] . "' class='btn btn-danger'>Удалить</button>
                                </form>
                            </td>
                        </tr>";
                        $price += $row['price'] * $key->quantity;
                    }
                endif;
                ?>
            </table>

            <h4>Общая сумма: <?php echo $price; ?> ₽</h4>
            <h5>После подачи заявки, мы свяжемся с вами, чтобы уточнить адрес доставки</h5>

            <div class="d-flex justify-content-between mt-4">
                <?php if (isset($_SESSION['id_user']) && !empty($_SESSION['cart'])): ?>
                    <!-- Кнопка для модального окна -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                        Оформить заказ
                    </button>
                <?php else: ?>
                    <button type="button" class="btn btn-primary" disabled>Оформить заказ</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($_SESSION['cart'])): ?>
<!-- Модальное окно оплаты -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content needs-validation" id="paymentForm" action="checkout.php" method="POST" novalidate>
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">Введите данные карты</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
          <input type="hidden" name="price" value="<?php echo $price; ?>">

          <div class="mb-3">
            <label for="cardNumber" class="form-label">Номер карты</label>
            <input type="text" class="form-control" id="cardNumber" name="card_number" required pattern="\d{16}" placeholder="1234567812345678">
            <div class="invalid-feedback">Введите 16-значный номер карты.</div>
          </div>

          <div class="mb-3">
            <label for="expiryDate" class="form-label">Срок действия</label>
            <input type="text" class="form-control" id="expiryDate" name="expiry_date" required pattern="(0[1-9]|1[0-2])\/\d{2}" placeholder="MM/YY">
            <div class="invalid-feedback">Введите срок действия в формате MM/YY.</div>
          </div>

          <div class="mb-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="text" class="form-control" id="cvv" name="cvv" required pattern="\d{3}" placeholder="123">
            <div class="invalid-feedback">Введите 3-значный CVV код.</div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Подтвердить оплату</button>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>

<!-- JS: Валидация формы -->
<script>
(() => {
  'use strict';
  const forms = document.querySelectorAll('.needs-validation');
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      } else {
        alert("Заказ оформлен");
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>

<?php include_once ROOT . '/footer.php'; ?>