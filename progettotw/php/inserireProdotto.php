<?php
require_once 'bootstrap.php';
if(isset($_GET["action"]) || $_GET["id"]){
  $azione = $_GET["action"];
  $idprod = $_GET["id"];
}
$idvenditore = "1";
if($azione == "1"){
  $idprodotto = htmlspecialchars($_POST["idProdotto"]);
  $nome = htmlspecialchars($_POST["nomeProdotto"]);
  $descrizione_breve = htmlspecialchars($_POST["descrizione_breve"]);
  $descrizione_completa = htmlspecialchars($_POST["descrizione_completa"]);
  $prezzo = htmlspecialchars($_POST["prezzo"]);
  $valuta = htmlspecialchars($_POST["valuta"]);
//  $grado_ecosostenibilità = htmlspecialchars($_POST["grado_ecosostenibilità"]);
  $punti_eco = htmlspecialchars($_POST["grado_ecosostenibilità"]);
  $vetrina = htmlspecialchars($_POST["vetrina"]);
  $idCATEGORIA = htmlspecialchars($_POST["idcategoria"]);
  $url = $_FILES["immagineProdotto"];
  $titolo = htmlspecialchars($_POST["titoloImmagine"]);
  $descrizione = htmlspecialchars($_POST["descrizioneImmagine"]);
  $quantità = htmlspecialchars($_POST["quantità"]);

  $dbh->insertProduct($idprodotto, $nome, $descrizione_breve, $descrizione_completa, $prezzo, $punti_eco, $idCATEGORIA, $idvenditore);
  $dbh->insertImage($url["name"], $titolo, $titolo, $descrizione, $idprodotto);
  $dbh->insertMagazzino($quantità, $idprodotto);
  header("location: prodotti.php?action=$azione");
}else if($azione == "3"){
  $nome = htmlspecialchars($_POST["nomeProdotto"]);;
  $descrizione_breve = htmlspecialchars($_POST["descrizione_breve"]);
  $descrizione_completa = htmlspecialchars($_POST["descrizione_completa"]);
  $prezzo = htmlspecialchars($_POST["prezzo"]);
  $idCATEGORIA = htmlspecialchars($_POST["idcategoria"]);
  $url = $_FILES["immagineProdotto"];
  $titolo = htmlspecialchars($_POST["titoloImmagine"]);
  $descrizione = htmlspecialchars($_POST["descrizioneImmagine"]);
  $quantità = htmlspecialchars($_POST["quantità"]);
  $stato = htmlspecialchars($_POST["stato"]);

  $dbh->modifyProduct($nome, $prezzo, $descrizione_breve, $descrizione_completa, $idprod);
  if($url["name"]){
    $dbh->updateImage($url["name"], $titolo, $titolo, $descrizione, $idprod);
  }else{
    $templateParams["immagine"] = $dbh->getImageById($idprod);
    foreach($templateParams["immagine"] as $immagine):
      $dbh->updateImage($immagine["URL"], $titolo, $titolo, $descrizione, $idprod);
    endforeach;
  }
  $dbh->modifyProductMagazzino($quantità, $stato, $idprod);
  header("location: prodotti.php?action=2");
}else if($azione == "4"){
  $dbh->deleteImage($idprod);
  $dbh->deleteProductMagazzino($idprod);
  $dbh->deleteProduct($idprod);
  header("location: prodotti.php?action=2");
}

?>
