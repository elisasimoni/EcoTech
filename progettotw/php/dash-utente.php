<?php
require_once("bootstrap.php");
$templateParams["titolo"] = "Eco-Tech | Bacheca";
$templateParams["contenuto"] = "dash-detail.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);
$templateParams["ordini"] = $dbh->getTotOrdiniById($idcliente);
$templateParams["puntieco"] = $dbh->getTesseraByid($idcliente);
$templateParams["ultimoAcq"] = $dbh->getLastOrder($idcliente);

require("template/base-account.php");
?>
