<?php
require_once("bootstrap.php");

if(isset($_GET["action"])){
  $azione = $_GET["action"];
}

if($azione == "1"){
  $nome = htmlspecialchars($_POST["nome"]);
  $cognome = htmlspecialchars($_POST["cognome"]);
  $cf = htmlspecialchars($_POST["cf"]);
  $phone = htmlspecialchars($_POST["telefono"]);
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);
  // Crea una chiave casuale
  $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
  // Crea una password usando la chiave appena creata.
  $password = crypt($password,$random_salt);
  if($dbh->getClientByemail($email)){
    header("Location:utenteGiaRegistrato.php");
  }else{
    $dbh->insertCliente($nome, $cognome, $cf ,$email, $password, $phone, $random_salt);
    $templateParams["idutente"] = $dbh->getClientByemail($email);
    foreach($templateParams["idutente"] as $id):
      $dbh->insertTessera($id["idCLIENTE"]);
    endforeach;
    header("Location:registrazioneAvvenuta.php");
  }

}
?>
