<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Elimina Profilo";
$templateParams["contenuto"] = "delete-prof-detail.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);

require("template/base-account.php");
?>
