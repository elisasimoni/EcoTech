<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Supporto";
$templateParams["intestazione"] = "intestazione.php";
$templateParams["titolo-intestazione"] = "Supporto";

$templateParams["contenuto"] = "supporto.php";
$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
require("template/base.php");
?>
