<?php

//Funzione da implementare per aggiungere la classe active quando si seleziona un link da menù di navigazione
//attenzione : non devono essere sovrascritte ulteriori classi già presenti. La classe active deve essere aggiunta come ulteriore
function isActive($pagename, $classStart){
    if(basename($_SERVER['PHP_SELF'])==$pagename){
        echo "class=' $classStart active'";
    }else{
        echo "class='$classStart'";
    }
}

function getEmptyUser(){
  return array("name" => "", "surname" => "", "CF" => "", "email" =>"","password" =>"", "phone" => "");
}

function sommaQuantita($quantità){
  $quantità = $quantità + 1;
  return $quantità;
}

function dimQuantita($quantità){
  $quantità = $quantità - 1;
  return $quantità;
}

function sommaPrezzo($prezzo, $quantità){
  $totPrezzo = 0;
  for($i=0; $i < $quantità; $i++){
    $totPrezzo = $totPrezzo + $prezzo;
  }
  return $totPrezzo;
}

function dimPrezzo($prezzoDim, $prezzo){
  $prezzoDim = $prezzoDim - $prezzo;
  return $prezzoDim;
}

//controlla che ci siano quantità di prodotti nel carrello
function isEmpty($quantità){
  if($quantità == 0){
    echo "0";
  }else{
    echo $quantità;
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

function getAction($action){
    $result = "";
    switch($action){
        case 1:
            $result = "Inserisci";
            break;
        case 2:
            $result = "Modifica";
            break;
        case 3:
            $result = "Cancella";
            break;
    }

    return $result;
}


function uploadImage($path, $image){
    $imageName = basename($image["name"]);
    $fullPath = $path.$imageName;

    $maxKB = 500;
    $acceptedExtensions = array("jpg", "jpeg", "png", "gif");
    $result = 0;
    $msg = "";
    //Controllo se immagine è veramente un'immagine
    $imageSize = getimagesize($image["tmp_name"]);
    if($imageSize === false) {
        $msg .= "File caricato non è un'immagine! ";
    }
    //Controllo dimensione dell'immagine < 500KB
    if ($image["size"] > $maxKB * 1024) {
        $msg .= "File caricato pesa troppo! Dimensione massima è $maxKB KB. ";
    }

    //Controllo estensione del file
    $imageFileType = strtolower(pathinfo($fullPath,PATHINFO_EXTENSION));
    if(!in_array($imageFileType, $acceptedExtensions)){
        $msg .= "Accettate solo le seguenti estensioni: ".implode(",", $acceptedExtensions);
    }

    //Controllo se esiste file con stesso nome ed eventualmente lo rinomino
    if (file_exists($fullPath)) {
        $i = 1;
        do{
            $i++;
            $imageName = pathinfo(basename($image["name"]), PATHINFO_FILENAME)."_$i.".$imageFileType;
        }
        while(file_exists($path.$imageName));
        $fullPath = $path.$imageName;
    }

    //Se non ci sono errori, sposto il file dalla posizione temporanea alla cartella di destinazione
    if(strlen($msg)==0){
        if(!move_uploaded_file($image["tmp_name"], $fullPath)){
            $msg.= "Errore nel caricamento dell'immagine.";
        }
        else{
            $result = 1;
            $msg = $imageName;
        }
    }
    return array($result, $msg);
}
?>
