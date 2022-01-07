<?php
if(isset($_GET["action"])){
  $azione = $_GET["action"];
}

if($azione == "1"){
  $idprodotto = htmlspecialchars($_POST["idProdotto"]);
  $nome = htmlspecialchars($_POST["nomeProdotto"]);;
  $descrizione_breve = htmlspecialchars($_POST["descrizione_breve"]);
  $descrizione_completa = htmlspecialchars($_POST["descrizione_completa"]);
  $prezzo = htmlspecialchars($_POST["prezzo"]);
  $valuta = htmlspecialchars($_POST["valuta"]);
  $grado_ecosostenibilità = htmlspecialchars($_POST["grado_ecosostenibilità"]);
  $punti_eco = htmlspecialchars($_POST["punti_eco"]);
  $vetrina = htmlspecialchars($_POST["vetrina"]);
  $idCATEGORIA = htmlspecialchars($_POST["idcategoria"]);
  $url = $_FILES["immagineProdotto"];
  $titolo = htmlspecialchars($_POST["titoloImmagine"]);
  $descrizione = htmlspecialchars($_POST["descrizioneImmagine"]);

  $dbh->insertProduct($idprodotto, $nome, $descrizione_breve, $descrizione_completa, $prezzo, $valuta, $grado_ecosostenibilità, $punti_eco, $vetrina, $idCATEGORIA);
  $dbh->insertImage($url["name"], $titolo, $titolo, $descrizione, $idprodotto);

  header("location: gestisci-prodotto.php");
}
?>
