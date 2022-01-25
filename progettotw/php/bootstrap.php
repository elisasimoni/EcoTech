<?php
session_start();
if(isset($_SESSION['idCLIENTE'])){
  $idcliente = $_SESSION['idCLIENTE'];
}else{
  $idcliente = "0";
}
    require_once("db/database.php");
    require_once("utils/function.php");
    $dbh = new DatabaseHelper("localhost", "root", "", "eco-tech");
?>
