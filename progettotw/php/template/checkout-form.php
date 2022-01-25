<!-- Header pagina -->
<header>

    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/logo3.png"  alt="logo" width="180" height="120">
        <h2 class="mb-5">Checkout</h2>

        <!-- Breadcrumb -->
        <nav class="nav justify-content-center mb-5" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dots mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item"><a href="cart.php">Carrello</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>

</header>

<div class="row g-5">

    <!-- Riepilogo Carrello -->
    <div class="col-md-5 col-lg-4 order-md-last">

        <?php foreach ($templateParams["quantita"] as $quantita):?>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="titCarr">Il tuo carrello</span>
              <span class="badge rounded-0 pt-2 numProd"><?php echo $quantita["SUM(quantità)"];?></span>
          </h4>
        <?php endforeach; ?>

        <!-- Voci di riepilogo -->
        <ul class="list-group mb-3 rounded-0">
          <?php foreach ($templateParams["prodottiCarrello"] as $carrello):?>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0"><?php echo $carrello["nomeProdotto"];?></h6>
                    <?php $templateParams["prodotto"] = $dbh->getProductById($carrello["idPRODOTTO"]);
                    foreach ($templateParams["prodotto"] as $prodotto):?>
                    <small class="text-muted"><?php echo $prodotto["descrizione_breve"];?></small>
                  <?php endforeach; ?>
                </div>
                <span class="text-muted"><?php echo $carrello["valuta"]?> <?php echo $carrello["prezzo"];?>,00</span>
            </li>
            <?php endforeach; ?>
            <!-- Voce Codice Sconto Inserito -->
            <li class="list-group-item d-flex justify-content-between bg-light">
              <?php foreach ($templateParams["tariffa"] as $tariffa):?>
                <div class="text-danger fw-bold">
                    <h6 class="my-0 fw-bold">Spedizione</h6>
                    <small><?php echo $tariffa["nome"]?></small>
                </div>
                <span class="text-danger fw-bold">+ €<?php echo $tariffa["valore"];?>,00</span>

            </li>

            <!-- Voce Totale Spesa -->
            <li class="list-group-item d-flex justify-content-between">
                <span>Totale</span>
                <?php foreach ($templateParams["prezzo"] as $prezzo):?>
                <strong><?php echo totPrzSpe($prezzo["SUM(prezzo)"], $tariffa["valore"]);?>,00</strong>
                <?php endforeach;?>
            </li>
          <?php endforeach; ?>
        </ul>

    </div>


    <!-- Sezione dati di fatturazione pagina -->

    <div class="col-md-7 col-lg-8">
        <section>

            <h4 class="mb-3">Dati di Fatturazione</h4>
            <form action="pagamento.php?action=pay" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                <!-- Sezione dati di fatturazione -->
                <section>

                    <div class="row g-3">

                        <!-- Campo NOME -->
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="firstName" placeholder="Lorenzo" value="" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Il campo nome è obbligatorio</p>
                            </div>
                        </div>

                        <!-- Campo COGNOME -->
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Cognome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="lastName" placeholder="Rossi" value="" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Il cognome è obbligatorio</p>
                            </div>
                        </div>

                        <!-- Campo EMAIL -->
                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="email" placeholder="esempio@mail.com">

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Inserire un indirizzo email valido</p>
                            </div>
                        </div>

                        <!-- Campo INDIRIZZO -->
                        <div class="col-12">
                            <label for="address" class="form-label">Indirizzo <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" name="address" id="address" placeholder="Via dell'Università, 50" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Inserire un indirizzo valido</p>
                            </div>
                        </div>

                        <!-- Campo CITTA' -->
                        <div class="col-12">
                            <label for="città" class="form-label">Città <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="città" name="città" placeholder="Città">

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Inserire un indirizzo valido</p>
                            </div>
                        </div>

                        <!-- Selezione REGIONE -->
                        <div class="col-md-5">
                            <label for="country" class="form-label">Regione <span class="text-danger">*</span></label>
                            <select class="form-select shadow-none rounded-0" id="country" name="regione" required>
                                <option value="">Seleziona una regione</option>
                                <option value="Emilia-Romagna" >Emilia-Romagna</option>
                                <option value="Lombardia">Lombardia</option>
                                <option value="Piemonte">Piemonte</option>
                                <option value="Toscana">Toscana</option>
                                <option value="Marche">Marche</option>
                            </select>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Selezionare una regione valida</p>
                            </div>
                        </div>

                        <!-- Selezione PROVINCIA -->
                        <div class="col-md-4">
                            <label for="state" class="form-label">Provincia <span class="text-danger">*</span></label>
                            <select class="form-select shadow-none rounded-0" id="state" name="provincia" required>
                                <option value="">Seleziona</option>
                                <option value="Forlì-Cesena">Forlì-Cesena</option>
                                <option value="Roma">Roma</option>
                                <option value="Napoli">Napoli</option>
                                <option value="Rimini">Rimini</option>
                                <option value="Ravenna">Ravenna</option>
                            </select>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Selezionare una provincia valida</p>
                            </div>
                        </div>

                        <!-- Campo Codice Postale -->
                        <div class="col-md-3">
                            <label for="zip" class="form-label">Codice Postale <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="zip" placeholder="47042" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Il codice postale non è valido</p>
                            </div>
                        </div>

                    </div>

                </section>




                <hr class="my-4">

                <!-- Sezione Pagamento -->
                <section>

                    <h4 class="mb-3">Pagamento</h4>

                    <!-- Selezione Modalità di Pagamento -->
                    <div class="col-md-4 my-3">
                        <label for="state" class="form-label">Provincia <span class="text-danger">*</span></label>
                        <select  class="form-select shadow-none rounded-0" id="paymentMethod" name = "paymentMethod" required>
                          <option value="">Seleziona</option>
                          <option value="Carta di Credito">Carta di Credito</option>
                          <option value="Googlepay">Googlepay</option>
                          <option value="PayPal">PayPal</option>
                        </select>
                    </div>

                    <!-- Sezione Dati Carta -->
                    <div class="row gy-3">

                        <!-- Inserimento NOMINATIVO CARTA -->
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nome sulla Carta <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-name" placeholder="Lorenzo Rossi" required>
                            <small class="text-muted">Nome intero visualizzato sulla carta</small>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Il nome della carta è obbligatorio</p>
                            </div>

                        </div>

                        <!-- Inserimento NUMERO CARTA -->
                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Numero Carta <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-number" placeholder="4242 4242 4242 4242" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Il numero della carta è obbligatorio</p>
                            </div>
                        </div>

                        <!-- Inserimento SCADENZA CARTA -->
                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Scadenza <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-expiration" placeholder="11 / 22" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>La data di scadenza è obbligatoria</p>
                            </div>
                        </div>

                        <!-- Inserimento CVV -->
                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">CVV <span class="text-danger">*</span></label>
                            <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-cvv" placeholder="123" required>

                            <!-- Messaggio di errore -->
                            <div class="invalid-feedback">
                                <p>Il codice di sicurezza è obbligatorio</p>
                            </div>
                        </div>

                    </div>

                </section>

                <hr class="my-4">

                <!-- Sezione Effettua il Pagamento -->
                <section>
                    <input class="w-100 btn btn-primary btn-lg buttPag border-0" type="submit" value="Effettua il Pagamento">
                </section>

            </form>

        </section>

    </div>

</div>
