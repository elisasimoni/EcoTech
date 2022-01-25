<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | User-Registration";
$templateParams["contenuto"] = "prodotto-form.php";
$templateParams["categorie"] = $dbh->getCategoria();

$templateParams["prodotti"] = $dbh->getProduct();
$templateParams["azione"] = $_GET["action"];
if(isset($_GET["id"])){
  $templateParams["id"] = $_GET["id"];
  $templateParams["prodotto"] = $dbh->getProductById($templateParams["id"]);
  $templateParams["immagineProdotti"] = $dbh->getImageById($templateParams["id"]);
  $templateParams["magazzino"] = $dbh->getMagazzinoByID($templateParams["id"]);
}

require("template/base-dashbord.php");
?>
