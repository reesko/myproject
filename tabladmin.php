<?php

define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

session_start();

$title = 'Заказы';

if(!isset($_SESSION['admin'])or $_SESSION['admin']!=1){
    header('location:tabl.php');
}

include_once ROOT . '/header.php';
?>
    <div class="b_logout">
        <a class="logout" href="logout.php">Выйти</a>
    </div>
    <div style="display: flex;"><h2 class="h2 active">Заказы</h2> <a href="tabladmin_leads.php?page=1" class="h2">Заявки</a></div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">№</th>
            <th scope="col">ФИО</th>
            <th scope="col">Email</th>
            <th scope="col">Отдел</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Статус</th>
            <th scope="col">Кнопка</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $statuses=[1=>"Новое",2=>"В процессе",3=>"Одобрено",4=>"Отклонено"];

           $res=$mysqli->query("SELECT * FROM orders JOIN user USING(id_user)");
           
            $pages=$mysqli->query("SELECT * FROM orders");
            $pages_count=$pages->num_rows;
            $need_pages=ceil($pages_count/5);
            $offset=($_GET['page']-1)*5;
            $check=$mysqli->query("SELECT * FROM orders JOIN user USING(id_user) LIMIT 5 OFFSET $offset");
            $previous_page=$_GET['page']-1;
            $next_page=$_GET['page']+1;
            echo"
            <nav aria-label='pagination'>
            <ul class='pagination'>";
            if($previous_page<=0){
                echo "<li class='page-item disabled'><a class='page-link' href='tabladmin.php?page=$previous_page'>Previous</a></li>";
                }
            else{
                echo "<li class='page-item'><a class='page-link' href='tabladmin.php?page=$previous_page'>Previous</a></li>";
                }
            for($i=1;$i<=$need_pages;$i++){
            if($_GET['page']==$i){
                echo "<li class='page-item active'><a class='page-link' href='tabladmin.php?page=$i'>$i</a></li>";
                }
            else{
                echo "<li class='page-item'><a class='page-link' href='tabladmin.php?page=$i'>$i</a></li>";
                }
                }
            if($next_page>$need_pages){
                echo "<li class='page-item disabled'><a class='page-link' href='tabladmin.php?page=$next_page'>Next</a></li>";
                }
                else{
                echo "<li class='page-item'><a class='page-link' href='tabladmin.php?page=$next_page'>Next</a></li>";
                }
                echo "</ul>
            </nav>";
           $i=0;
           while($problem=$check->fetch_assoc()){
            $status=$problem['id_status'];
            echo "<tr>";
              echo '<td>'. ($i+1) .'</td>';
              echo '<td>'.$problem['name'].'</td>';
              echo '<td>'.$problem['email'].'</td>';
              $item=$mysqli->query("SELECT * FROM item_order JOIN orders USING(id_order) JOIN item USING(id_items) WHERE id_order='{$problem['id_order']}' LIMIT 5");
              echo '<td>'; while($f=$item->fetch_assoc()){echo $f['name']." - " . $f['count']." шт<br>";}echo "</td>";
              echo '<td>'.$problem['full_price'].'</td>';
              echo '<td>'.$statuses[$status].'</td>';
              echo '<td><a href="basa.php?operation=procces&id_problem='.$problem['id_order'].'"class="suc">В процессе</a><br><a href="basa.php?operation=sucOrder&id_problem='.$problem['id_order'].'" class="suc">Одобрить</a><br><a href="basa.php?operation=decOrder&id_problem='.$problem['id_order'].'" class="dec">Отклонить</a></br></td>';
              $i++;
              echo "</tr>";};
          ?>
        </tbody>
    </table>
<?php
include_once ROOT . '/footer.php';