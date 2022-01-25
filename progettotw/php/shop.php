<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Shop";
$templateParams["intestazione"] = "intestazione.php";
$templateParams["titolo-intestazione"] = "Shop";
$templateParams["contenuto"] = "product.php";
$templateParams["prodotti"] = $dbh->getProduct();
$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);

require("template/base.php");
?>
