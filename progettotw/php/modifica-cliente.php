<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Modifica Profilo";
$templateParams["contenuto"] = "mod-prof.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
$templateParams["utente"] = $dbh->getClientById($idcliente);


if(isset($_POST["nome"])){
  $nome = htmlspecialchars($_POST["nome"]);
  $cognome = htmlspecialchars($_POST["cognome"]);
  $mail = htmlspecialchars($_POST["mail"]);
  $telefono = htmlspecialchars($_POST["telefono"]);
  foreach($templateParams["utente"] as $utente):
    $mailcliente = $utente["email"];
    if($mail == $mailcliente){
      $dbh->modifyClientById($nome, $cognome, $mail, $telefono, $idcliente);
      header("location:modifica-profilo.php");
    }else{
      if($dbh->getClientByemail($mail)){
        header("location:utenteGiaRegistrato.php");
      }
    }
  endforeach;
}

require("template/base-account.php");
?>
