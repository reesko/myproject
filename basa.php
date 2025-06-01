<?php
define('ROOT', dirname(__FILE__));
include_once ROOT . '/configuration.php';

if($_GET['operation']=="sucOrder"){
    session_start();
    $id_problem=$_GET['id_problem'];
    $mysqli->query("UPDATE orders SET id_status=3 WHERE id_order='$id_problem'");
    header("Location: tabladmin.php?page=1");
}
if($_GET['operation']=="decOrder"){
    session_start();
    $id_problem=$_GET['id_problem'];
    $mysqli->query("UPDATE orders SET id_status=4 WHERE id_order='$id_problem'");
    header("Location: tabladmin.php?page=1");
}
if($_GET['operation']=="procces"){
    session_start();
    $id_problem=$_GET['id_problem'];
    $mysqli->query("UPDATE orders SET id_status=2 WHERE id_order='$id_problem'");
    header("Location: tabladmin.php?page=1");
}

if($_GET['operation']=="sucOrder_lead"){
    session_start();
    $id_problem=$_GET['id_problem'];
    $mysqli->query("UPDATE leads SET id_status=3 WHERE id='$id_problem'");
    header("Location: tabladmin_leads.php?page=1");
}
if($_GET['operation']=="decOrder_lead"){
    session_start();
    $id_problem=$_GET['id_problem'];
    $mysqli->query("UPDATE leads SET id_status=4 WHERE id='$id_problem'");
    header("Location: tabladmin_leads.php?page=1");
}
if($_GET['operation']=="procces_lead"){
    session_start();
    $id_problem=$_GET['id_problem'];
    $mysqli->query("UPDATE leads SET id_status=2 WHERE id='$id_problem'");
    header("Location: tabladmin_leads.php?page=1");
}

$mysqli->close();
?>
