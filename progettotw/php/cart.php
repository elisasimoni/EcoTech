<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Carrello";
$templateParams["contenuto"] = "cart-form.php";
$templateParams["intestazione"] = "intestazione.php";
$templateParams["titolo-intestazione"] = "cart";
$templateParams["prodottiCarrello"] = $dbh->getCart($idcliente);
$templateParams["tariffa"] = $dbh->getTariffa();
$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["prezzo"] = $dbh->getTotPrezzoProduct($idcliente);


require("template/base.php");
?>
