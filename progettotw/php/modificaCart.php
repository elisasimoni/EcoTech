<?php
require_once("bootstrap.php");
if(isset($_SESSION["idCLIENTE"])){
  $quantità = 1;

  if(isset($_GET["id"]) || isset($_GET["action"]) || isset($_GET["shop"])){
    $idPRODOTTO = $_GET["id"];
    $azione = $_GET["action"];
    $shop = $_GET["shop"];
  }

  $templateParams["prodotto"] = $dbh->getProductById($idPRODOTTO);
  $templateParams["prodotticarrello"] = $dbh->getProductCartById($idPRODOTTO, $idcliente);
  $templateParams["carrello"] = $dbh->getCart($idcliente);

  foreach($templateParams["prodotto"] as $prodotto):
  if($dbh->getProductCartById($idPRODOTTO, $idcliente)){
    if($azione == "add"){
      foreach($templateParams["prodotticarrello"] as $carrello):
        $templateParams["magazzino"] = $dbh->getMagazzinoById($carrello["idPRODOTTO"]);
        foreach($templateParams["magazzino"] as $magazzino):
          if($magazzino["quantità"] == $carrello["quantità"]){
            $dbh->modifyProductCart($carrello["quantità"], sommaPrezzo($prodotto["prezzo"], sommaQuantita($carrello["quantità"])), $prodotto["punti_eco"],$idPRODOTTO);
          }else{
            $dbh->modifyProductCart(sommaQuantita($carrello["quantità"]), sommaPrezzo($prodotto["prezzo"], sommaQuantita($carrello["quantità"])), $prodotto["punti_eco"],$idPRODOTTO);
          }
          if($shop == "1"){
            header("location: shop.php");
          }else if($shop == "2"){
            header("location: product-det-single.php?id=$idPRODOTTO");
          }else{
            header("location: cart.php");
          }
        endforeach;
      endforeach;
    }else if($azione == "dim"){
      foreach($templateParams["prodotticarrello"] as $carrello):
        if($carrello["quantità"] == "1"){
          $dbh->deleteProductCart($idPRODOTTO);
          header("location: cart.php");
        }else{
          $dbh->modifyProductCart(dimQuantita($carrello["quantità"]), dimPrezzo( $carrello["prezzo"],$prodotto["prezzo"]), $prodotto["punti_eco"] ,$idPRODOTTO);
          header("location: cart.php");
        }
      endforeach;
    }else if($azione == "delete"){
      $dbh->deleteProductCart($idPRODOTTO);
      header("location: cart.php");
    }
  }else{
      $dbh->insertInToCart($prodotto["nome"], $prodotto["prezzo"], $prodotto["valuta"], $quantità, $prodotto["punti_eco"], $prodotto["idPRODOTTO"], $idcliente);
      header("location: shop.php");
  }
  endforeach;
}else{
  header("location: login.php");
}
?>
