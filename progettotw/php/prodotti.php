<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Dashbord";
$templateParams["azione"] = $_GET["action"];
$templateParams["categorie"] = $dbh->getCategoria();
$templateParams["prodotti"] = $dbh->getProduct();

if(isset($_GET["action"]) || isset($_GET["id"])){
    $azione = $_GET["action"];
    if($azione == "1"){
      $templateParams["titolo-sezione"] = "Crea Prodotto";
      $templateParams["contenuto"] = "prodottiForm.php";
    }elseif($azione == "2"){
      $templateParams["titolo-sezione"] = "Modifica Prodotti";
      $templateParams["contenuto"] = "modProdotti.php";
    }elseif($azione == "3"){
      $id = $_GET["id"];
      $templateParams["prodotto"] = $dbh->getProductById($id);
      $templateParams["immagineProdotti"] = $dbh->getImageById($id);
      $templateParams["magazzino"] = $dbh->getMagazzinoByID($id);
      $templateParams["titolo-sezione"] = "Modifica Prodotto";
      $templateParams["contenuto"] = "modProd.php";
    }
}


require("template/admin-dash.php");
?>
