<?php
require_once("bootstrap.php");
$templateParams["titolo"] = "Eco-Tech | Home";
$templateParams["contenuto"] = "product-detail.php";

$idprodotto = $_GET["id"];
$templateParams["prodotto"] = $dbh->getProductById($idprodotto);
$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
require("template/base.php");
?>
