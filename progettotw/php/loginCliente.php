<?php
require_once("bootstrap.php");

if(isset($_POST['email'], $_POST['password'])) {
   $email = $_POST['email'];
   $password = $_POST['password']; // Recupero la password criptata.
   if($email=="admin@admin" && $password=="admin"){
        header("location:dashbord.php");
   }elseif( $dbh->checkLogin($email, $password)){
        header("location:dash-utente.php");
    }else{
        header("location:login.php?error=1");
    }
}
?>
