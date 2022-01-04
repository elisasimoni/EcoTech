<?php

function isActive($pagename, $classStart){
    if(basename($_SERVER['PHP_SELF'])==$pagename){
        echo "class=' $classStart active'";
    }else{
        echo "class='$classStart'";
    }
}

function isUserLoggedIn(){
    return !empty($_SESSION['idCLIENTE']);
}

function registerLoggedUser($user){
    $_SESSION["idCLIENTE"] = $user["idCLIENTE"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["nome"] = $user["nome"];
}
?>