<?php
if(isset($_GET["action"])){
  $azione = $_GET["action"];
}

if($azione == "1"){
  $idCATEGORIA = htmlspecialchars($_POST["idcategoria"]);
  $nome = htmlspecialchars($_POST["nome"]);;
  $descrizione = htmlspecialchars($_POST["descrizione"]);
  $idcatalogo = htmlspecialchars($_POST["idcatalogo"]);
  $dbh->insertCategoria($idCATEGORIA, $nome, $descrizione, $idcatalogo);
}
header("location: categoria.php");
?>
