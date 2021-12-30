<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Login";
$templateParams["contenuto"] = "login-form.php";

if(isset($_POST["floatingInput"]) && isset($_POST["password"])){
    $login_result = $dbh->checkLogin($_POST["floatingInput"], $_POST["password"]);
    if(count($login_result)==0){
        $templateParams["errorelogin"] = "Errore! Controllare username o password!";
    }
    else{
        registerLoggedUser($login_result[0]);
    }
}
if(isUserLoggedIn()){
    $templateParams["titolo"] = "Eco-Tech | Login";
    $templateParams["contenuto"] = "index.php";
}
require("template/base-login.php");
?>
