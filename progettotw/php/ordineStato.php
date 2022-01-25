<?php
require_once("bootstrap.php");


  $codice = htmlspecialchars($_POST["codice"]);
  $email = htmlspecialchars($_POST["email"]);

  if($dbh->getOrdineStatusById($codice)) {
     $templateParams["titolo"] = "Eco-Tech | Tracking Ordini";
     $templateParams["stato"] = $dbh->getOrdineStatusById($codice);
     $templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
     $templateParams["intestazione"] = "intestazione.php";
     $templateParams["titolo-intestazione"] = "Tracking";
     $templateParams["contenuto"]="stato.php";

  }else{

     header("Location:index.php");

  }

require("template/base.php");

?>
