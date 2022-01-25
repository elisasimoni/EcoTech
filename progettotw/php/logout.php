<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Logout";
$_SESSION = array();
session_destroy();

header("location: index.php");
require("template/base-login.php");
?>
