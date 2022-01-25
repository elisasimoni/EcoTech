<?php
require_once("bootstrap.php");
$templateParams["titolo"] = "Eco-Tech | Account";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);
require("template/base-account.php");
?>
