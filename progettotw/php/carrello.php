<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | carrello";
$templateParams["contenuto"] = "prodottiInCarrello.php";
$templateParams["prodottiCarrello"] = $dbh->getCart();

$templateParams["quantita"] = $dbh->getQuantitaProduct();

require("template/base.php");
?>
