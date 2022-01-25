<?php
require_once("bootstrap.php");
$templateParams["titolo"] = "Eco-Tech | Tracking Ordini";
$templateParams["intestazione"] = "intestazione.php";
$templateParams["titolo-intestazione"] = "Tracking";

$templateParams["contenuto"] = "track.php";
$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);

require("template/base.php");
?>
