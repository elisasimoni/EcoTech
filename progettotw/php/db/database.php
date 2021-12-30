<?php

class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername, $username, $password, $dbname);
        if($this->db->connect_error){
            die("Connesione al database fallita");
        }
    }

    public function signup($name, $surname, $mail, $phone, $pass){
        $query = "INSERT INTO cliente (nome, cognome, CF, email, password, telefono) VALUES ('$name', '$surname', '$CF', '$mail', '$pass','$phone')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkLogin($username, $password){
          $query = "SELECT idCLIENTE, email, password FROM cliente WHERE attivo=1 AND email = ? AND password = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('ss',$username, $password);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
      }
}
?>
