<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Home";
$templateParams["contenuto"] = "hero.php";
$templateParams["js"] = array("js/jquery-3.4.1.min.js","js/function.js");

$templateParams["quantita"] = $dbh->getQuantitaProduct();

require("template/base.php");
?>
