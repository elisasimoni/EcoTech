<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Tracking";
$templateParams["contenuto"] = "tracking-product.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct();
require("template/base.php");
?>
