<?php
require_once("bootstrap.php");
$dataOra = date("y-m-d h:i:s", time());
$templateParams["titolo"] = "Eco-Tech | Checkout";
$templateParams["contenuto"] = "pagamento-form.php";
$templateParams["pagamento"] = $dbh->getPagamentoByDateOraCli($dataOra, $idcliente);
require("template/base-checkout.php");
?>
