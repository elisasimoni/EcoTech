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
            $query = "SELECT idPRODOTTO, nome,descrizione_breve, descrizione_completa, prezzo, valuta, punti_eco, idCATEGORIA FROM prodotto";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getProductById($idPRODOTTO){
            $stmt = $this->db->prepare("SELECT idPRODOTTO, nome, descrizione_breve, descrizione_completa, prezzo, valuta, punti_eco, idCATEGORIA FROM prodotto WHERE idPRODOTTO = ?");
            $stmt->bind_param('i',$idPRODOTTO);
            $stmt->execute();
            $result = $stmt->get_result();

            return $result->fetch_all(MYSQLI_ASSOC);
        }

    //inserire modificare eliminare prodotti del venditore
        public function insertProduct($idPRODOTTO, $nome, $descrizione_breve, $descrizione_completa, $prezzo, $punti_eco, $idCATEGORIA ){
          $query = "INSERT INTO prodotto (idPRODOTTO, nome, descrizione_breve, descrizione_completa, prezzo, punti_eco, idCATEGORIA) VALUES (?,?,?,?,?,?,?)";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('issssii', $idPRODOTTO, $nome, $descrizione_breve, $descrizione_completa, $prezzo, $punti_eco, $idCATEGORIA);
          $stmt->execute();
        }

        public function modifyProduct($nome, $prezzo, $descrizione_breve, $descrizione_completa, $idPRODOTTO){
          $query = "UPDATE prodotto SET nome = ?, prezzo = ?, descrizione_breve = ?, descrizione_completa = ? WHERE idPRODOTTO = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('ssssi', $nome, $prezzo, $descrizione_breve, $descrizione_completa, $idPRODOTTO);
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

//magazzino
        public function getMagazzino(){
          $query = "SELECT idMAGAZZINO, quantità, stato, idPRODOTTO FROM magazzino";
          $stmt = $this->db->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getMagazzinoByID($idPRODOTTO){
          $query = "SELECT idMAGAZZINO, quantità, stato, idPRODOTTO FROM magazzino WHERE idPRODOTTO = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i',$idPRODOTTO);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function insertMagazzino($quantità, $idPRODOTTO){
          $query = "INSERT INTO magazzino (quantità, idPRODOTTO ) VALUES (?,?)";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('ii', $quantità, $idPRODOTTO);
          $stmt->execute();
        }

        public function modifyProductMagazzino($quantità, $stato, $idPRODOTTO){
          $query = "UPDATE magazzino SET quantità = ?, stato = ? WHERE idPRODOTTO = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('isi', $quantità, $stato,$idPRODOTTO);
          return $stmt->execute();
        }

        public function deleteProductMagazzino($idPRODOTTO){
            $query = "DELETE FROM magazzino WHERE idPRODOTTO = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('i',$idPRODOTTO);
            $stmt->execute();
            var_dump($stmt->error);
            return true;
        }
    //visualizzare i prodotti presenti nel carrello
        public function getCart($idCLIENTE){
          $query = "SELECT idCARRELLO, nomeProdotto, prezzo, valuta, quantità, punti_eco,idPRODOTTO, idCLIENTE FROM carrello WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i',$idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getProductCartById($idPRODOTTO, $idCLIENTE){
          $stmt = $this->db->prepare("SELECT prezzo, quantità, idPRODOTTO, idCLIENTE FROM carrello WHERE idPRODOTTO = ? AND idCLIENTE = ?");
          $stmt->bind_param('ii',$idPRODOTTO, $idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getQuantitaProduct($idCLIENTE){
          $query = "SELECT SUM(quantità) FROM carrello WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i', $idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getTotPrezzoProduct($idCLIENTE){
          $query = "SELECT SUM(prezzo) FROM carrello WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i', $idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getTotPuntiEco($idCLIENTE){
          $query = "SELECT SUM(punti_eco) FROM carrello WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i', $idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

    //inserire modificare eliminare i prodotti presenti nel carrello dell'acquirente
        public function insertInToCart($nomeProdotto, $prezzo, $valuta, $quantità, $punti_eco,$idPRODOTTO, $idCLIENTE){
          $query = "INSERT INTO carrello (nomeProdotto, prezzo, valuta, quantità, punti_eco,idPRODOTTO, idCLIENTE) VALUES (?,?,?,?,?,?,?)";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('sssiiii', $nomeProdotto, $prezzo, $valuta, $quantità, $punti_eco, $idPRODOTTO, $idCLIENTE);
          $stmt->execute();
        }

        public function modifyProductCart($quantità, $prezzo, $punti_eco, $idPRODOTTO){
          $query = "UPDATE carrello SET quantità = ?, prezzo = ?, punti_eco = ? WHERE idPRODOTTO = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('isii', $quantità, $prezzo, $punti_eco,$idPRODOTTO);
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

//selezionare tariffe
        public function getTariffa(){
          $query = "SELECT idTARIFFA, nome, valore, valuta FROM tariffa";
          $stmt = $this->db->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

//pagamento
        public function getPagamentoByDateOraCli($dataOra, $idCLIENTE){
          $stmt = $this->db->prepare("SELECT idPAGAMENTO, dataOra, idCLIENTE FROM pagamento WHERE dataOra = ? AND idCLIENTE = ?");
          $stmt->bind_param('si',$dataOra, $idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getPagamentoByCliente($idCLIENTE){
          $stmt = $this->db->prepare("SELECT idPAGAMENTO, tipologia_pagamento ,importo, dataOra, idCLIENTE FROM pagamento WHERE idCLIENTE = ?");
          $stmt->bind_param('i',$idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getOrdineAndPagamentoById($idCLIENTE){
            $query = "SELECT ordine.codice, ordine.nomeProdotto, ordine.tipologia_pagamento, ordine.importo, ordine.dataOra FROM (ordine) WHERE ordine.idCLIENTE = ? GROUP BY ordine.codice";
             $stmt = $this->db->prepare($query);
             $stmt->bind_param('i',$idCLIENTE);
             $stmt->execute();
             $result = $stmt->get_result();
             return $result->fetch_all(MYSQLI_ASSOC);
           }

        public function getPagamentoById($dataOra, $idCLIENTE){
          $stmt = $this->db->prepare("SELECT idPAGAMENTO, tipologia_pagamento ,importo, dataOra, idCLIENTE FROM pagamento WHERE dataOra = ? AND idCLIENTE = ?");
          $stmt->bind_param('si', $dataOra,$idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function insertPagamento($tipologia_pagamento, $importo, $dataOra ,$idCLIENTE){
          $query = "INSERT INTO pagamento (tipologia_pagamento, importo, dataOra,idCLIENTE) VALUES (?,?,?,?)";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('sssi', $tipologia_pagamento, $importo, $dataOra, $idCLIENTE);
          $stmt->execute();
        }

        //tessera
        public function getTesseraByid($idCLIENTE){
          $query = "SELECT idTESSERA, punteggio, idCLIENTE FROM tessera WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i',$idCLIENTE);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function insertTessera($idCLIENTE){
          $query = "INSERT INTO tessera (idCLIENTE) VALUES (?)";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i',$idCLIENTE);
          $stmt->execute();
        }

        public function modifyTesseraById($punteggio,$idCLIENTE){
          $query = "UPDATE tessera SET punteggio = ? WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('si', $punteggio, $idCLIENTE);
          return $stmt->execute();
        }

        public function deleteTesseraById($idCLIENTE){
            $query = "DELETE FROM tessera WHERE idCLIENTE = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('i',$idCLIENTE);
            $stmt->execute();
            var_dump($stmt->error);
            return true;
        }
//ordine
      public function getOrdini(){
        $stmt = $this->db->prepare("SELECT dataOra, codice, stato, importo, tipologia_pagamento, idCLIENTE FROM ordine");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getOrdiniById($idCLIENTE){
        $stmt = $this->db->prepare("SELECT dataOra, codice, stato, importo, tipologia_pagamento FROM ordine WHERE idCLIENTE = ?");
        $stmt->bind_param('i',$idCLIENTE);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getTotOrdini(){
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM ordine");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }
      public function getTotOrdiniById($idCLIENTE){
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM ordine WHERE idCLIENTE = ?");
        $stmt->bind_param('i',$idCLIENTE);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getOrdineCodiceByIdPagamento($idPagamento){
        $stmt = $this->db->prepare("SELECT codice FROM ordine WHERE idPAGAMENTO = ?");
        $stmt->bind_param('i',$idPagamento);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getOrdineStatusById($codice){
           $query = "SELECT stato FROM ordine WHERE codice = ?";
           $stmt = $this->db->prepare($query);
           $stmt->bind_param('s',$codice);
           $stmt->execute();
           $result = $stmt->get_result();
           return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function insertOrdine($dataOra, $codice, $stato, $importo, $tipologia_pagamento, $idVENDITORE, $idCLIENTE, $idPAGAMENTO){
        $query = "INSERT INTO ordine (dataOra, codice, stato, importo, tipologia_pagamento, idVENDITORE, idCLIENTE, idPAGAMENTO) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssisiii', $dataOra, $codice, $stato, $importo, $tipologia_pagamento, $idVENDITORE, $idCLIENTE, $idPAGAMENTO);
        $stmt->execute();
      }

      public function modifyOrdine($stato, $codice){
        $query = "UPDATE ordine SET stato = ? WHERE codice = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$stato, $codice);
        return $stmt->execute();
      }
      //storico acquisti
      public function getStorico(){
        $query = "SELECT idACQUISTI, dataOra, idPRODOTTO, idCLIENTE FROM storicoacquisti";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getStoricoById($idCLIENTE){
        $query = "SELECT idACQUISTI, dataOra, idPRODOTTO, idCLIENTE FROM storicoacquisti WHERE idCLIENTE = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idCLIENTE);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getStoricoByData($dataOra,$idCLIENTE){
        $query = "SELECT idACQUISTI, dataOra, idPRODOTTO, idCLIENTE FROM storicoacquisti WHERE dataOra = ? AND idCLIENTE = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si',$dataOra, $idCLIENTE);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function getLastOrder($idCLIENTE){
        $stmt = $this->db->prepare("SELECT dataOra FROM storicoacquisti WHERE idCLIENTE = ? ORDER BY dataOra DESC LIMIT 1");
        $stmt->bind_param('i',$idCLIENTE);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function insertStorico($dataOra, $idPRODOTTO, $idCLIENTE){
        $query = "INSERT INTO storicoacquisti (dataOra, idPRODOTTO, idCLIENTE) VALUES (?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sii', $dataOra, $idPRODOTTO, $idCLIENTE);
        $stmt->execute();
      }

      //notifiche cliente
      public function getNotificheById($idCLIENTE){
        $query = "SELECT idNOTIFICHE, testo, idCLIENTE FROM notifiche WHERE idCLIENTE = ? ORDER BY idNOTIFICHE DESC";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idCLIENTE);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function insertNotifica($testo, $idCLIENTE){
        $query = "INSERT INTO notifiche (testo, idCLIENTE) VALUES (?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $testo, $idCLIENTE);
        $stmt->execute();
      }
      //notifiche venditore
      public function getNotifiche(){
        $query = "SELECT idNOTIFICHEVEND, testo FROM notifichevenditore";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
      }

      public function insertNotificaVend($testo){
        $query = "INSERT INTO notifichevenditore (testo) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $testo);
        $stmt->execute();
      }

      //lista clienti
            public function getClienti(){
              $query = "SELECT idCLIENTE, nome, cognome, cf, email, telefono FROM cliente";
              $stmt = $this->db->prepare($query);
              $stmt->execute();
              $result = $stmt->get_result();

              return $result->fetch_all(MYSQLI_ASSOC);
            }

            public function getClientById($idCLIENTE){
              $query = "SELECT idCLIENTE, nome, cognome, cf, email, telefono FROM cliente WHERE idCLIENTE = ?";
              $stmt = $this->db->prepare($query);
              $stmt->bind_param('i',$idCLIENTE);
              $stmt->execute();
              $result = $stmt->get_result();

              return $result->fetch_all(MYSQLI_ASSOC);
            }

            public function getClientByNome($nome, $cognome, $telefono){
              $query = "SELECT idCLIENTE, nome, cognome, cf, telefono FROM cliente WHERE nome = ? AND cognome = ? AND telefono = ?";
              $stmt = $this->db->prepare($query);
              $stmt->bind_param('sss',$nome, $cognome, $telefono);
              $stmt->execute();
              $result = $stmt->get_result();

              return $result->fetch_all(MYSQLI_ASSOC);
            }

            public function getClientByemail($email){
              $query = "SELECT idCLIENTE, nome, cognome, cf, email, telefono FROM cliente WHERE email = ?";
              $stmt = $this->db->prepare($query);
              $stmt->bind_param('s',$email);
              $stmt->execute();
              $result = $stmt->get_result();

              return $result->fetch_all(MYSQLI_ASSOC);
            }
    //registrazione
        public function insertCliente($name, $surname, $CF ,$mail, $pass, $phone, $random_salt){
            $query = "INSERT INTO cliente (nome, cognome, CF, email, password, telefono, salt) VALUES (?, ?, ?, ?, ?,?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('sssssss',$name, $surname,$CF ,$mail, $pass, $phone, $random_salt);
            $stmt->execute();
        }

        public function modifyClientById($nome, $cognome, $mail, $telefono, $idCLIENTE){
          $query = "UPDATE cliente SET nome = ?, cognome = ?, email = ?, telefono = ? WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('ssssi', $nome, $cognome, $mail, $telefono, $idCLIENTE);
          return $stmt->execute();
        }

        public function deleteClientById($idCLIENTE){
          $query = "DELETE FROM cliente WHERE idCLIENTE = ?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('i',$idCLIENTE);
          $stmt->execute();
          var_dump($stmt->error);
          return true;
        }

        //rubrica rubrica_indirizzi
public function rubrica_indirizzi($stato,$regione,$provincia,$città,$cap,$via,$idCLIENTE){
            $query = "INSERT INTO rubrica_indirizzi(stato, regione,provincia,città, cap,via,idCLIENTE) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('ssssssi',$stato,$regione,$provincia,$città,$cap,$via,$idCLIENTE);
            $stmt->execute();
        }
    //login
        public function checkLogin($email, $password){
          $query = "SELECT idCLIENTE, email, password, salt FROM cliente WHERE email = ? LIMIT 1";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('s',$email);
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($idCLIENTE,$db_email, $db_password, $salt);
          $stmt->fetch();
          $password = $hash = crypt($password,$salt);
          if($db_password == $password){
                session_start();
                $_SESSION['idCLIENTE'] = $idCLIENTE;
                return true;

            }
          }
    }
?>
