<?php
$pageActive = "nav-link active";
$pageDisactive = "nav-link";
//Funzione da implementare per aggiungere la classe active quando si seleziona un link da menù di navigazione
//attenzione : non devono essere sovrascritte ulteriori classi già presenti. La classe active deve essere aggiunta come ulteriore
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
