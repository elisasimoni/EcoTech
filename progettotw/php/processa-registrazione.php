<?php
/*if(!isset($_POST["password"]) || !isset($_POST["email"])
|| strlen($_POST["password"]) == 0 || !(preg_match_all('/[a-z_]/i',$_POST["user"]) == strlen($_POST["user"]))
|| !preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/", $_POST["email"]) ){
    header("Location:registrati.php?error=Dati mancanti o non conformi");
}
else{}*/
//inserimento dei dati db

  $name = htmlspecialchars($_POST["floatingName"]);
  $surname = htmlspecialchars($_POST["floatingSurname"]);
  $CF = htmlspecialchars($_POST["floatingCF"]);
  $email = htmlspecialchars($_POST["floatingEmail"]);
  $password = htmlspecialchars($_POST["floatingPassword"]);
  $phone = htmlspecialchars($_POST["floatingPhone"]);

  $id = $dbh->signup($name, $surname,$CF ,$email, $password, $phone);

  if($id != false){
    $msg = "inserimento completato correttamente";
  }else{
    $msg = "errore in inserimento";
  }
header("location: registration.php?formmsg=".$msg);
?>
