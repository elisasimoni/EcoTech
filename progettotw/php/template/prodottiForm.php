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

        <form action="inserireProdotto.php?action=<?php echo $templateParams['azione'];?>" class="row g-4"  method="POST" enctype="multipart/form-data">

            <div class="col-12 text-center justify-content-center align-items-center p-4 border border-2 border-dashed position-relative rounded-3">

                <!-- Immagine -->
                <img src="img/gallery.svg" class="h-50px" alt="">
                <div>
                    <h6 class="my-2">Inserisci un'immagine, oppure<a href="#!" class="text-primary"> Cerca Immagine</a></h6>
                    <label style="cursor:pointer;">
                        <span>
                            <input class="form-control stretched-link" type="file" id="immagineProdotto" name="immagineProdotto">
                        </span>
                    </label>
                </div>

            </div>

            <!-- Titolo Immagine -->
            <div class="col-md-6 pt-4">
                <label class="form-label">Titolo Immagine</label>
                <div class="input-group">
                    <input type="text" id="titoloImmagine" name="titoloImmagine" class="form-control shadow-none" placeholder="Titolo Immagine">
                </div>
            </div>

            <!-- Descrizione Immagine -->
            <div class="col-md-6 pt-4">
                <label class="form-label">Descrizione Immagine</label>
                <div class="input-group">
                    <input type="text" id="descrizioneImmagine" name="descrizioneImmagine" class="form-control shadow-none" placeholder="Desrizione Immagine">
                </div>
            </div>

            <!-- Id Prodotto -->
            <div class="col-6 pt-4">
                <label class="form-label">IdProdotto</label>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none" id="idProdotto" name="idProdotto" placeholder="idProdotto">
                </div>
            </div>

            <!-- Nome Prodotto -->
            <div class="col-6 pt-4">
                <label class="form-label">Nome Prodotto</label>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none" id="nomeProdotto" name="nomeProdotto" placeholder="Nome Prodotto">
                </div>
            </div>

            <!-- Categoria -->
            <div class="col-md-3 pt-4">
                <label class="form-label">Categoria</label>
                <select class="form-control shadow-none" id="idcategoria" name="idcategoria" required>
                  <option value="">Seleziona</option>
                  <?php foreach($templateParams["categorie"] as $categoria):?>
                   <option value="<?php echo $categoria["idCATEGORIA"];?>"><?php echo $categoria["idCATEGORIA"];?>-<?php echo $categoria["nome"];?></option>
                  <?php endforeach; ?>
                </select>
            </div>

            <!-- Quantità Prodotto Disponibile -->
            <div class="col-md-3 col-sm-12 pt-4">
                <label class="form-label">Quantità</label>
                <div class="input-group">
                    <input type="number" min="1" max="500" id="quantità" name="quantità" class="form-control shadow-none" placeholder="14">
                </div>
            </div>

            <!-- Prezzo -->
            <div class="col-md-3 pt-4">
                <label class="form-label">Prezzo - € Euro</label>
                <input class="form-control shadow-none" type="text" id="prezzo" name="prezzo" placeholder="57,00">
            </div>

            <!-- Grado -->
            <div class="col-md-3 pt-4">
                <label class="form-label">Grado Eco</label>
                <select class="form-control shadow-none" id="grado_ecosostenibilità" name="grado_ecosostenibilità" required>
                    <option value="">Seleziona Grado Eco</option>
                    <option value="6">A</option>
                    <option value="5">B</option>
                    <option value="4">C</option>
                    <option value="3">D</option>
                    <option value="2">E</option>
                    <option value="1">F</option>
                </select>
            </div>

            <!-- Descrizione Breve Prodotto -->
            <div class="col-12 pt-4">
                <label class="form-label">Descrizione Breve</label>
                <textarea class="form-control shadow-none" id="descrizione_breve" name="descrizione_breve"></textarea>
            </div>

            <!-- Descrizione Prodotto -->
            <div class="col-12 pt-4">
                <label class="form-label">Descrizione Completa</label>
                <textarea class="form-control h-300px shadow-none" id="descrizione_completa" name="descrizione_completa"></textarea>
            </div>

            <!-- Bottone Salva -->
            <div class="d-sm-flex justify-content-end pt-4">
                <input type="submit" class="btn btn-success p-3 mb-0 rounded-pill" value="Salva Modifiche"/>
            </div>

            <!-- Bottone Annulla -->
            <div class="d-sm-flex justify-content-end pt-4">
                <input type="reset" class="btn btn-danger p-3 mb-0 ms-3 rounded-pill" value="Annulla"/>
            </div>

        </form>
    </div>
</div>
