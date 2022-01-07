<?php
    /*$articolo = $templateParams["articolo"];
    $azione = getAction($templateParams["azione"])*/
?>
<form action="inserireprodotto.php?action=1" method="POST" enctype="multipart/form-data">
  <a href="gestisci-prodotto.php?action=1">Crea nuovo prodotto</a>
  <a href="gestisci-prodotto.php?action=2">Modificare prodotto</a>
  <a href="gestisci-prodotto.php?action=3">Elimina prodotto</a>
    <h2>Inserisci Prodotto</h2>

    <ul>
        <li>
            <label for="idProdotto">idProdotto:</label><input type="text" id="idProdotto" name="idProdotto" value="" />
        </li>
        <li>
            <label for="nomeProdotto">nomeProdotto:</label><input type="text" id="nomeProdotto" name="nomeProdotto" value="" />
        </li>
        <li>
            <label for="descrizione_breve">descrizione_breve:</label><textarea id="descrizione_breve" name="descrizione_breve"><?php /*echo $articolo["testoarticolo"];*/ ?></textarea>
        </li>
        <li>
            <label for="descrizione_completa">descrizione_completa:</label><textarea id="descrizione_completa" name="descrizione_completa"><?php /*echo $articolo["anteprimaarticolo"]; */?></textarea>
        </li>
        <li>
            <label for="prezzo">prezzo:</label><input type="text" id="prezzo" name="prezzo" value="" />
        </li>
        <li>
            <label for="valuta">valuta:</label><input type="text" id="valuta" name="valuta" value="" />
        </li>
        <li>
            <label for="grado_ecosostenibilità">grado_ecosostenibilità: <select class="" id="grado_ecosostenibilità" name="grado_ecosostenibilità">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
            </select> </label>
        </li>
        <li>
            <label for="punti_eco">punti_eco:</label><input type="number" min="1" max="5" id="punti_eco" name="punti_eco" value="nomeProdotto" value="" />
        </li>
        <li>
            <label for="vetrina">vetrina:</label><input type="number" min="0" max="1" id="vetrina" name="vetrina" value="" />
        </li>
        <li>
            <label for="idcategoria">idcategoria: <select class="" id="idcategoria" name="idcategoria">
              <?php foreach($templateParams["categorie"] as $categoria):?>
                <option value="<?php echo $categoria["idCATEGORIA"];?>"><?php echo $categoria["idCATEGORIA"];?>-<?php echo $categoria["nome"];?></option>
              <?php endforeach; ?>
            </select> </label>
            <a href="categoria.php">aggiungi nuova categoria</a>
        </li>
        <li>
            <label for="immagineProdotto">immagineProdotto:</label><input type="file" id="immagineProdotto" name="immagineProdotto" value="" />
        </li>
        <li>
            <label for="titoloImmagine">titoloImmagine:</label><input type="text" id="titoloImmagine" name="titoloImmagine" value="" />
        </li>
        <li>
            <label for="descrizioneImmagine">descrizioneImmagine:</label><input type="text" id="descrizioneImmagine" name="descrizioneImmagine" value="" />
        </li>
        <li>
            <input type="submit" name="submit" value="inserisci" />
            <a href="gestisci-prodotto.php">Annulla</a>
        </li>
      </ul>
</form>
