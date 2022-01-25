<?php

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

function dimQuantitaMagazzino($quantitàM, $quantitàC){
  $quantità = $quantitàM - $quantitàC;
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

function totPrezzo($prezzo){
  if($prezzo == 0){
    echo "00";
  }else{
    echo $prezzo;
  }
}

function totPrzSpe($prezzo, $spedizione){
  $totPrezzo = $prezzo + $spedizione;
  return $totPrezzo;
}

function statoMagazzino($stato){
  if($stato == "Disponibile"){
    echo " bi bi-check2 text-success fw-bold";
  }else if($stato == "presto disponibile"){
    echo " bi-x text-warning fw-bold";
  }else if($stato == "esaurito"){
    echo " bi-x text-danger fw-bold";
  }
}

function codiceAlfanumerico(){
   $N_Caratteri = 10;
   $Stringa = "";
   For($I=0;$I<$N_Caratteri;$I++){
     do{
       $N = Ceil(rand(48,122));
     }while(!((($N >= 48) && ($N <= 57)) || (($N >= 65) && ($N <= 90)) || (($N >= 97) && ($N <= 122))));
     $Stringa = $Stringa.Chr ($N);
   }
   return $Stringa;
}
//funzione azione da svolgere
function azione($azione){
  if($azione == "1"){
    echo "Inserisci Nuovo Prodotto";
  }else if($azione == "2" || $azione == "4"){
    echo "Modifica Prodotto";
  }else if($azione == "3"){
    echo "Elimina Prodotto";
  }
}

function quantita($quantita){
  if($quantita == "0"){
    echo "btn-secondary disabled";
  }else{
    echo "btn-success border-0";
  }
}

function somma($prezzo){
  if(!$prezzo){
    echo "disabled";
  }else{
    echo "";
  }
}

function puntiEco($punti){
  $puntiMax = "6";
  $puntiNonAssegnati = $puntiMax - $punti;
  for($i=0; $i < $punti; $i++){
    echo "<li class='list-inline-item me-0 medium'><i class='bi bi-recycle text-success'></i></li>";
  }
  for($i=0; $i < $puntiNonAssegnati; $i++){
    echo "<li class='list-inline-item me-0 medium'><i class='bi bi-recycle'></i></li>";
  }
}

function sommaPunti($punti, $punteggio){
    $totPunti = $punti + $punteggio;
    return $totPunti;
}

function notifica($nome, $cognome, $data, $codice, $stato){
  if($stato == "acquisto"){
    return "Gentile $nome $cognome, l'ordine da lei effettuato è andato a buon fine!
            In data e ora: $data
            il suo codice identificativo dell'ordine:
            $codice.";
  }elseif($stato == "spedito"){
    return "Gentile $nome $cognome, il suo ordine $codice, è stato $stato.";
  }

}

function notificaVend($nome, $cognome, $data, $codice, $stato, $prodotto){
  if($stato == "acquisto"){
    return "Il cliente, $nome $cognome, ha effettuato un ordine!
            In data e ora: $data
            codice ordine:
            $codice.";
  }else if($stato == "esaurito"){
    return "il prodotto, $prodotto, è esaurito! Affrettati a ricaricare il magazzino! ";
  }

}

function checkLogin(){
  if(isset($_SESSION["idCLIENTE"])){
    echo "dash-utente.php";
  }else{
    echo "login.php";
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
