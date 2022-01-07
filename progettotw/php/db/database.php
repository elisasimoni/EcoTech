<?php

class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername, $username, $password, $dbname);
        if($this->db->connect_error){
            die("Connesione al database fallita");
        }
    }

    public function getProduct(){
        $query = "SELECT idPRODOTTO, nome,descrizione_breve, descrizione_completa, prezzo, valuta, grado_ecosostenibilità, punti_eco, vetrina, idCATEGORIA FROM prodotto";
        /*if($n > 0){
            $query .= " LIMIT ?";
        }*/
        $stmt = $this->db->prepare($query);
        /*if($n > 0){
            $stmt->bind_param('i',$n);
        }*/
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($idPRODOTTO){
        $stmt = $this->db->prepare("SELECT idPRODOTTO, nome, prezzo, valuta FROM prodotto WHERE idPRODOTTO = ?");
        $stmt->bind_param('i',$idPRODOTTO);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//inserire modificare eliminare prodotti del venditore
    public function insertProduct($idPRODOTTO, $nome, $descrizione_breve, $descrizione_completa, $prezzo, $valuta, $grado_ecosostenibilità, $punti_eco, $vetrina, $idCATEGORIA ){
      $query = "INSERT INTO prodotto (idPRODOTTO, nome, descrizione_breve, descrizione_completa, prezzo, valuta, grado_ecosostenibilità, punti_eco, vetrina, idCATEGORIA) VALUES (?,?,?,?,?,?,?,?,?,?)";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('issssssiii', $idPRODOTTO, $nome, $descrizione_breve, $descrizione_completa, $prezzo, $valuta, $grado_ecosostenibilità, $punti_eco, $vetrina, $idCATEGORIA);
      $stmt->execute();
    }

    public function modifyProduct($nome, $prezzo, $vetrina, $idPRODOTTO){
      $query = "UPDATE prodotto SET nome = ?, prezzo = ?, vetrina = ? WHERE idPRODOTTO = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('ssii', $nome, $prezzo, $vetrina, $idPRODOTTO);
      return $stmt->execute();
    }

    public function deleteProduct($idPRODOTTO){
        $query = "DELETE FROM prodotto WHERE idPRODOTTO = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idPRODOTTO);
        $stmt->execute();
        var_dump($stmt->error);
        return true;
    }

//recuperare le immagini dei prodotti
    public function getImage(){
      $query = "SELECT URL, titolo, alt, descrizione, idPRODOTTO FROM immagine";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getImageById($idPRODOTTO){
      $stmt = $this->db->prepare("SELECT URL, titolo, alt, descrizione, idPRODOTTO FROM immagine WHERE idPRODOTTO = ?");
      $stmt->bind_param('i',$idPRODOTTO);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

//inserire modificare eliminare immagine di un prodotto
    public function insertImage($URL, $titolo, $alt, $descrizione, $idPRODOTTO){
      $query = "INSERT INTO immagine (URL, titolo, alt, descrizione, idPRODOTTO) VALUES (?,?,?,?,?)";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('ssssi', $URL, $titolo, $alt, $descrizione, $idPRODOTTO);
      $stmt->execute();
    }

    public function updateImage($URL, $titolo, $alt, $descrizione, $idPRODOTTO){
      $query = "UPDATE immagine SET URL = ?, titolo = ?, alt = ?, descrizione = ? WHERE idPRODOTTO = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('ssssi', $URL, $titolo, $alt, $descrizione, $idPRODOTTO);
      return $stmt->execute();
    }

    public function deleteImage($idPRODOTTO){
      $query = "DELETE FROM immagine WHERE idPRODOTTO = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('i',$idPRODOTTO);
      $stmt->execute();
      var_dump($stmt->error);
      return true;
    }

//visualizzare catalogo
    public function getCatalogo(){
      $query = "SELECT idCATALOGO FROM catalogo";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

//visualizzare le categories
    public function getCategoria(){
      $query = "SELECT idCATEGORIA, nome, descrizione , idCATALOGO FROM categoria";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getIdCategoria(){
      $query = "SELECT idCATEGORIA FROM categoria";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertCategoria($idCATEGORIA, $nome, $descrizione, $idCATALOGO){
      $query = "INSERT INTO categoria (idCATEGORIA, nome, descrizione, idCATALOGO) VALUES (?,?,?,?)";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('issi', $idCATEGORIA, $nome, $descrizione, $idCATALOGO);
      $stmt->execute();
    }

//visualizzare i prodotti presenti nel carrello
    public function getCart(){
      $query = "SELECT idCARRELLO, nomeProdotto, prezzo, valuta, quantità ,idPRODOTTO FROM carrello";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductCartById($idPRODOTTO){
      $stmt = $this->db->prepare("SELECT prezzo, quantità, idPRODOTTO FROM carrello WHERE idPRODOTTO = ?");
      $stmt->bind_param('i',$idPRODOTTO);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getQuantitaProduct(){
      $query = "SELECT SUM(quantità) FROM carrello";
      $stmt = $this->db->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

//inserire modificare eliminare i prodotti presenti nel carrello dell'acquirente
    public function insertInToCart($nomeProdotto, $prezzo, $valuta, $quantità, $idPRODOTTO){
      $query = "INSERT INTO carrello (nomeProdotto, prezzo, valuta, quantità, idPRODOTTO) VALUES (?,?,?,?,?)";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('sssii', $nomeProdotto, $prezzo, $valuta, $quantità, $idPRODOTTO);
      $stmt->execute();
    }

    public function modifyProductCart($quantità, $prezzo, $idPRODOTTO){
      $query = "UPDATE carrello SET quantità = ?, prezzo = ? WHERE idPRODOTTO = ?";
      $stmt = $this->db->prepare($query);
      $stmt->bind_param('isi', $quantità, $prezzo, $idPRODOTTO);
      return $stmt->execute();
    }

    public function deleteProductCart($idPRODOTTO){
        $query = "DELETE FROM carrello WHERE idPRODOTTO = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idPRODOTTO);
        $stmt->execute();
        var_dump($stmt->error);
        return true;
    }

//registrazione
    public function signup($name, $surname, $CF ,$mail, $pass, $phone){
        $query = "INSERT INTO cliente (nome, cognome, CF, email, password, telefono) VALUES (?, ?, ?, ?, ?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssssi',$name, $surname,$CF ,$mail, $pass, $phone);
        $stmt->execute();
    }

//login
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
