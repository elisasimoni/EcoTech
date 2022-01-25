<?php
require_once("bootstrap.php");
$idcliente = $_SESSION['idCLIENTE'];
$templateParams["titolo"] = "Eco-Tech | Ordini";
$templateParams["contenuto"] = "order-detail.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);
$templateParams["ordini"] = $dbh->getOrdiniById($idcliente);

require("template/base-account.php");
?>
