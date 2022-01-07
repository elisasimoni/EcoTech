<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Shop";
$templateParams["contenuto"] = "product-single-line.php";
$templateParams["prodotti"] = $dbh->getProduct();


$templateParams["quantita"] = $dbh->getQuantitaProduct();

require("template/base.php");
?>
