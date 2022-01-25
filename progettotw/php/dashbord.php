<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Dashboard";
$templateParams["titolo-sezione"] = "Dashboard";
$templateParams["contenuto"] = "notifiche-venditore.php";

$templateParams["notifiche"] = $dbh->getNotifiche();


require("template/admin-dash.php");
?>
