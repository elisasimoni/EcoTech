<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Dashbord";
$templateParams["contenuto"] = "ordine-form.php";

if(isset($_GET["action"])){
  $azione = $_GET["action"];
  $templateParams["ordini"] = $dbh->getTotOrdini();
  $templateParams["storico"] = $dbh->getStorico();
}

require("template/base-dashbord.php");
?>
