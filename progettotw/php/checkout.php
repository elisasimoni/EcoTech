<?php
require_once("bootstrap.php");
if(isset($_SESSION['idCLIENTE'])){
  $quantità = 1;
  $templateParams["titolo"] = "Eco-Tech | Checkout";
  $templateParams["contenuto"] = "checkout-form.php";

  $templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
  $templateParams["prodottiCarrello"] = $dbh->getCart($idcliente);
  $templateParams["tariffa"] = $dbh->getTariffa();
  $templateParams["prezzo"] = $dbh->getTotPrezzoProduct($idcliente);

  if(isset($_GET["action"]) && $_GET["id"]){
    $azione = $_GET["action"];
    $idPRODOTTO = $_GET["id"];
    $templateParams["prodotto"] = $dbh->getProductById($idPRODOTTO);
    foreach($templateParams["prodotto"] as $prodotto):
    if($azione == "1"){
      $dbh->insertInToCart($prodotto["nome"], $prodotto["prezzo"], $prodotto["valuta"], $quantità, $prodotto["punti_eco"], $prodotto["idPRODOTTO"], $idcliente);
    }
    endforeach;
    $templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
    $templateParams["prodottiCarrello"] = $dbh->getCart($idcliente);
    $templateParams["prezzo"] = $dbh->getTotPrezzoProduct($idcliente);

  }
}else{
  header("location:login.php");
}

require("template/base-checkout.php");
?>
