<?php
    /*$articolo = $templateParams["articolo"];
    $azione = getAction($templateParams["azione"])*/
?>
<form action="inserireCategoria.php?action=1" method="POST" enctype="multipart/form-data">
  <a href="categoria.php?action=1">Crea nuova categoria</a>
  <a href="categoria.php?action=2">Modificare categoria</a>
  <a href="categoria.php?action=3">Elimina categoria</a>
    <h2>Inserisci Categoria</h2>

    <ul>
        <li>
            <label for="idcategoria">idCategoria:</label><input type="text" id="idcategoria" name="idcategoria" value="" />
        </li>
        <li>
            <label for="nome">nome categoria:</label><input type="text" id="nome" name="nome" value="" />
        </li>
        <li>
            <label for="descrizione">descrizione:</label><textarea id="descrizione" name="descrizione"><?php /*echo $articolo["testoarticolo"];*/ ?></textarea>
        </li>
        <li>
            <label for="idcatalogo">idcatalogo: <select class="" id="idcatalogo" name="idcatalogo">
              <?php foreach($templateParams["catalogo"] as $catalogo):?>
                <option value="<?php echo $catalogo["idCATALOGO"];?>"><?php echo $catalogo["idCATALOGO"];?></option>
              <?php endforeach; ?>
            </select> </label>
            <a href="#">aggiungi nuova catalogo</a>
        </li>
            <input type="submit" name="submit" value="inserisci" />
            <a href="gestisci-prodotto.php">Annulla</a>
        </li>
      </ul>
</form>
