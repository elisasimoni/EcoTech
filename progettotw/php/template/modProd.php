<div class="card card-body shadow-lg border-0">
    <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center py-3">
        <!-- Crea Prodotto -->
        <li class="nav-item px-4">
            <a class="btn btn-primary" href="prodotti.php?action=1">Crea Prodotto</a>
        </li>
        <!-- Modifica Prodotto -->
        <li class="nav-item px-4">
            <a class="btn btn-primary" href="prodotti.php?action=2">Modifica Prodotto</a>
        </li>
    </ul>

    <!-- Contenuto centrale Card -->
    <div class="card-body">
<?php foreach($templateParams["prodotto"] as $prodotto):?>
        <form action="inserireProdotto.php?action=<?php echo $templateParams['azione'];?>&id=<?php echo $prodotto["idPRODOTTO"]?>" class="row g-4"  method="POST" enctype="multipart/form-data">

            <div class="col-12 text-center justify-content-center align-items-center p-4 border border-2 border-dashed position-relative rounded-3">

                <!-- Immagine -->
                <div>
                    <h6 class="my-2">Inserisci un'immagine</h6>
                    <label for="immagineProdotto">
                        <span>
                            <input class="form-control stretched-link" type="file" id="immagineProdotto" name="immagineProdotto" />
                        </span>
                    </label>
                </div>
            </div>

            <?php foreach($templateParams["immagineProdotti"] as $immagineprodotto): ?>
            <!-- Titolo Immagine -->
            <div class="col-md-6 pt-4">
                <label class="form-label">Titolo Immagine</label>
                <div class="input-group">
                    <input type="text" id="titoloImmagine" name="titoloImmagine" class="form-control shadow-none" placeholder="Titolo Immagine" value="<?php echo $immagineprodotto["titolo"];?>">
                </div>
            </div>

            <!-- Descrizione Immagine -->
            <div class="col-md-6 pt-4">
                <label class="form-label">Descrizione Immagine</label>
                <div class="input-group">
                    <input type="text" id="descrizioneImmagine" name="descrizioneImmagine" class="form-control shadow-none" placeholder="Desrizione Immagine" value="<?php echo $immagineprodotto["descrizione"];?>">
                </div>
            </div>
            <?php endforeach; ?>

            <!-- Nome Prodotto -->
            <div class="col-lg-6 col-sm-12 pt-4">
                <label class="form-label">Nome Prodotto</label>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none" id="nomeProdotto" name="nomeProdotto" placeholder="Nome Prodotto" value="<?php echo $prodotto["nome"]?>">
                </div>
            </div>

            <!-- Categoria -->
            <div class="col-md-6 col-sm-4 pt-4">
                <label class="form-label">Categoria</label>
                <select class="form-control shadow-none" id="idcategoria" name="idcategoria" required>
                <option value="">Seleziona</option>
                  <option value="<?php echo $prodotto["idCATEGORIA"]?>"><?php echo $prodotto["idCATEGORIA"];?></option>
                  <?php foreach($templateParams["categorie"] as $categoria):?>
                    <option value="<?php echo $categoria["idCATEGORIA"];?>"><?php echo $categoria["idCATEGORIA"];?>-<?php echo $categoria["nome"];?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <!-- Quantità Prodotto Disponibile -->
            <?php foreach($templateParams["magazzino"] as $magazzino): ?>
            <div class="col-lg-6 col-sm-6 pt-4">
                <label class="form-label">Quantità</label>
                <div class="input-group">

                    <input type="number" min="1" max="500" id="quantità" name="quantità" class="form-control shadow-none" placeholder="14" value="<?php echo $magazzino["quantità"];?>">
                </div>
            </div>

            <!-- Prezzo -->
            <div class="col-md-6 pt-4">
                <label class="form-label">Prezzo - € Euro</label>
                <input class="form-control shadow-none" type="text" id="prezzo" name="prezzo" placeholder="57,00" value="<?php echo $prodotto["prezzo"]?>">
            </div>

            <!-- Disponibilià -->
            <div class="col-md-6 pt-4">
                <label class="form-label">Disponibilità</label>
                <select class="form-control shadow-none" id="stato" name="stato" required>
                    <option value="">Seleziona</option>
                    <option value="<?php echo $magazzino["stato"];?>"><?php echo $magazzino["stato"];?></option>
                    <option value="Disponibile">Disponibile</option>
                    <option value="Esaurito">Esaurito</option>
                    <option value="Presto Disponibile">Presto Disponibile</option>
                </select>
            </div>
            <?php endforeach; ?>
            <!-- Descrizione Breve Prodotto -->
            <div class="col-12 pt-4">
                <label class="form-label">Descrizione Breve</label>
                <textarea class="form-control shadow-none" id="descrizione_breve" name="descrizione_breve" ><?php echo $prodotto["descrizione_breve"];?></textarea>
            </div>

            <!-- Descrizione Prodotto -->
            <div class="col-12 pt-4">
                <label class="form-label">Descrizione Completa</label>
                <textarea class="form-control h-300px shadow-none" id="descrizione_completa" name="descrizione_completa"><?php echo $prodotto["descrizione_completa"];?></textarea>
            </div>

            <!-- Bottone Salva -->
            <div class="d-sm-flex justify-content-end pt-4">
                <input type="submit" class="btn btn-success p-3 mb-0 rounded-pill" value="Salva Modifiche"/>
            </div>

            <!-- Bottone Annulla -->
            <div class="d-sm-flex justify-content-end pt-4">
                <a href="prodotti.php?action=2" class="btn btn-danger p-3 mb-0 ms-3 rounded-pill">Annulla</a>
            </div>

        </form>
        <?php endforeach; ?>
    </div>
</div>
