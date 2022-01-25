<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Ordini";

$templateParams["titolo-sezione"] = "Dettaglio Ordini";
$templateParams["contenuto"] = "order-detail2.php";
$templateParams["ordini"] = $dbh->getOrdini();


if(isset($_GET["action"]) || isset($_GET["id"]) || isset($_GET["codice"])){
  $azione = $_GET["action"];
  $id = $_GET["id"];
  $codice = $_GET["codice"];
  $stato = "spedito";
  $templateParams["cliente"] = $dbh->getClientById($id);
  $spedizione = "1";
  if($azione == "1"){
    foreach($templateParams["cliente"] as $cliente):
        $dbh->insertNotifica(notifica($cliente["nome"], $cliente["cognome"], $dataOra, $codice, $stato), $id);
    endforeach;
    $dbh->modifyOrdine($stato, $codice);
  }
  header("Location: ordini-venditore.php");
}

require("template/admin-dash.php");
?>
