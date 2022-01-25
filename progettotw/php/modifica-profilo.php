<?php
require_once("bootstrap.php");
$templateParams["titolo"] = "Eco-Tech | Modifica Profilo";
$templateParams["contenuto"] = "mod-prof.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);

require("template/base-account.php");
?>
