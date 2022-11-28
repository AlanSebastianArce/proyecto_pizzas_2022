<?php
session_start();
if($_SESSION['logueado']){
    include_once("config_products.php");
    include_once("db.php");
    $link = new Db();
    $idDel=$_GET['q'];
    $sqlCtg="delete from categories where id_category=".$idDel;
    $stmtCtg = $link->prepare($sqlCtg);
    $stmtCtg->execute();
    header('location:welcome.php');
}
?>