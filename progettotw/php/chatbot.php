<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | ChatBot";
$templateParams["contenuto"] = "chat-bot.php";
$templateParams["quantita"] = $dbh->getQuantitaProduct();
require("template/base.php");
?>
