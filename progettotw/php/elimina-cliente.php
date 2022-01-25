<?php
require_once("bootstrap.php");

$dbh->deleteTesseraById($idcliente);
//$dbh->deleteIndirizzoById($idcliente);
$dbh->deleteClientById($idcliente);

header("location:logout.php");
require("template/base-account.php");
?>
