<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | User-Registration";

$templateParams["catalogo"] = $dbh->getCatalogo();
$templateParams["categoria"] = $dbh->getCategoria();
$templateParams["idcategoria"] = $dbh->getIdcategoria();
$templateParams["quantita"] = $dbh->getQuantitaProduct();

if(isset($_GET["action"])){
  $azione = $_GET["action"];
}

if($azione == "1"){
  $templateParams["contenuto"] = "categoria-form-inserire.php";
}

if($azione == "2"){
  $templateParams["contenuto"] = "categoria-form-modificare.php";
}

if($azione == "3"){
  $templateParams["contenuto"] = "categoria-form-eliminare.php";
}

require("template/base.php");
?>
