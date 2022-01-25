<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Clienti";

$templateParams["titolo-sezione"] = "Lista Clienti";

$templateParams["contenuto"] = "lista-clienti.php";
$templateParams["clienti"] = $dbh->getClienti();

require("template/admin-dash.php");
?>