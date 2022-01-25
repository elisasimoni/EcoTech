<?php
require_once("bootstrap.php");
$templateParams["titolo"] = "Eco-Tech | Notifiche";
$templateParams["contenuto"] = "notifiche-det.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);
$templateParams["notifiche"] = $dbh->getNotificheById($idcliente);
require("template/base-account.php");
?>
