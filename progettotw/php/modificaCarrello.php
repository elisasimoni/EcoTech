<?php
require_once("bootstrap.php");

$idPRODOTTO = 0;
$quantità = 1;

if(isset($_GET["id"]) || isset($_GET["action"])){
  $idPRODOTTO = $_GET["id"];
  $azione = $_GET["action"];
}

$templateParams["prodotto"] = $dbh->getProductById($idPRODOTTO);
$templateParams["prodotticarrello"] = $dbh->getProductCartById($idPRODOTTO);
$templateParams["carrello"] = $dbh->getCart();

foreach($templateParams["prodotto"] as $prodotto):
if($dbh->getProductCartById($idPRODOTTO)){
  if($azione == "add"){
    foreach($templateParams["prodotticarrello"] as $carrello):
      $dbh->modifyProductCart(sommaQuantita($carrello["quantità"]), sommaPrezzo($prodotto["prezzo"], sommaQuantita($carrello["quantità"])), $idPRODOTTO);
      header("location: carrello.php");
    endforeach;
  }else if($azione == "dim"){
    foreach($templateParams["prodotticarrello"] as $carrello):
      if($carrello["quantità"] == "1"){
        $dbh->deleteProductCart($idPRODOTTO);
        header("location: carrello.php");
      }else{
        $dbh->modifyProductCart(dimQuantita($carrello["quantità"]), dimPrezzo( $carrello["prezzo"],$prodotto["prezzo"]), $idPRODOTTO);
        header("location: carrello.php");
      }
    endforeach;
  }else if($azione == "delete"){
    $dbh->deleteProductCart($idPRODOTTO);
    header("location: carrello.php");
  }
}else{
    $dbh->insertInToCart($prodotto["nome"], $prodotto["prezzo"], $prodotto["valuta"], $quantità, $prodotto["idPRODOTTO"]);
    header("location: shop.php");
}
endforeach;


?>
