<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | User-Registration";
$templateParams["contenuto"] = "prodotto-form.php";
$templateParams["categorie"] = $dbh->getCategoria();

$templateParams["quantita"] = $dbh->getQuantitaProduct();

require("template/base.php");
?>
