<?php
require_once("bootstrap.php");

$templateParams["carrello"] = $dbh->getCart($idcliente);
$templateParams["tariffa"] = $dbh->getTariffa();
$templateParams["prezzo"] = $dbh->getTotPrezzoProduct($idcliente);
$templateParams["puntieco"] = $dbh->getTotPuntiEco($idcliente);
$templateParams["punteggio"] = $dbh->getTesseraByid($idcliente);
$templateParams["cliente"] = $dbh->getClientById($idcliente);

if(isset($_GET["action"])){
  $azione = $_GET["action"];
}

if($azione == "pay"){
  $stato= "italia";
  $regione=  htmlspecialchars($_POST["regione"]);
  $provincia=  htmlspecialchars($_POST["provincia"]);
  $città=  htmlspecialchars($_POST["città"]);
  $cap=  htmlspecialchars($_POST["zip"]);
  $via= htmlspecialchars($_POST["address"]);
  $dbh->rubrica_indirizzi($stato,$regione,$provincia,$città,$cap,$via,$idcliente);

  $tipologia = htmlspecialchars($_POST["paymentMethod"]);
  $dataOra = date("Y-m-d h:i:s", time());
  $codice = codiceAlfanumerico();
  foreach($templateParams["carrello"] as $carrello):
    $templateParams["magazzino"] = $dbh->getMagazzinoById($carrello["idPRODOTTO"]);
    foreach($templateParams["magazzino"] as $magazzino):
      if($magazzino["quantità"] == "1" || $magazzino["quantità"] == $carrello["quantità"]){
          $dbh->modifyProductMagazzino(dimQuantitaMagazzino($magazzino["quantità"], $carrello["quantità"]), "Esaurito", $carrello["idPRODOTTO"]);
          $dbh->insertNotificaVend(notificaVend($cliente["nome"], $cliente["cognome"], $dataOra, $codice, "esaurito", $carrello["nomeProdotto"]));
      }else{
          $dbh->modifyProductMagazzino(dimQuantitaMagazzino($magazzino["quantità"], $carrello["quantità"]), "Disponibile", $carrello["idPRODOTTO"]);
      }
      $dbh->insertStorico($dataOra, $carrello["idPRODOTTO"],$carrello["idCLIENTE"]);
      $dbh->deleteProductCart($carrello["idPRODOTTO"]);
    endforeach;
  endforeach;
  foreach($templateParams["prezzo"] as $prezzo):
    $dbh->insertPagamento($tipologia, $prezzo["SUM(prezzo)"], $dataOra, $idcliente);
  $templateParams["pagamento"] = $dbh->getPagamentoByDateOraCli($dataOra, $idcliente);
  foreach($templateParams["pagamento"] as $pagamento):
    $dbh->insertOrdine($dataOra, $codice, "in elaborazione", $prezzo["SUM(prezzo)"], $tipologia,"1", $idcliente, $pagamento["idPAGAMENTO"]);
  endforeach;
  endforeach;
  foreach($templateParams["puntieco"] as $punti):
    foreach($templateParams["punteggio"] as $punteggio):
      $dbh->modifyTesseraById(sommaPunti($punti["SUM(punti_eco)"], $punteggio["punteggio"]), $idcliente);
    endforeach;
  endforeach;
  foreach($templateParams["cliente"] as $cliente):
    $dbh->insertNotifica(notifica($cliente["nome"], $cliente["cognome"], $dataOra, $codice, "acquisto"), $idcliente);
    $dbh->insertNotificaVend(notificaVend($cliente["nome"], $cliente["cognome"], $dataOra, $codice, "acquisto","0"));
  endforeach;
header("location: pagamentoEffettuato.php");
}

?>
