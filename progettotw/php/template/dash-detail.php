<div class="card card-body p-4 shadow">

    <div class="card bg-transparent card-body p-0">

        <div class="row d-flex justify-content-between">

            <!-- Avatar Utente -->
            <div class="col-auto mt-2">
                <div class="avatar avatar-xxl mt-n3">
                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="img/logo-prof-utente.jpeg" alt="immagine profilo utente">
                </div>
            </div>

            <?php foreach($templateParams["utente"] as $utente):?>
            <!-- Dettagli Utente -->
            <div class="col d-md-flex justify-content-between align-items-center">
                <div>
                    <h1 class=" fs-1"><?php echo $utente["nome"];?> <?php echo $utente["cognome"];?></h1>
                </div>
            </div>
            <?php endforeach;?>
        </div>

        <div class="row g-4 mt-4">

        <!-- Ordini Effettuati -->
        <div class="col-sm-6 col-lg-4">
            <div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
                <span class="display-6 text-warning mb-0"><i class="bi bi-box-seam fa-fw"></i></span>
                <div class="ms-4">
                    <div class="d-flex">
                      <?php foreach ($templateParams["ordini"] as $ordini):?>
                        <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="25" data-purecounter-delay="200" data-purecounter-duration="0"><?php echo $ordini["COUNT(*)"];?></h5>
                      <?php endforeach;?>
                    </div>
                    <span class="mb-0 h6 fw-light">Ordini Effettuati</span>
                </div>
            </div>
        </div>

        <!-- Punti Eco -->
        <div class="col-sm-6 col-lg-4">
            <div class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
                <span class="display-6 text-success mb-0"><i class="bi bi-recycle fa-fw"></i></span>
                <div class="ms-4">
                    <div class="d-flex">
                      <?php foreach ($templateParams["puntieco"] as $puntieco):?>
                        <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="25" data-purecounter-delay="200" data-purecounter-duration="0"><?php echo $puntieco["punteggio"];?></h5>
                      <?php endforeach;?>
                    </div>
                    <span class="mb-0 h6 fw-light">Punti Eco</span>
                </div>
            </div>
        </div>

        <!-- Data ultimo acquisto -->
        <div class="col-sm-6 col-lg-4">
            <div class="d-flex justify-content-center align-items-center p-4 bg-primary bg-opacity-10 rounded-3">
                <span class="display-6 text-primary mb-0"><i class="bi bi-calendar2-event fa-fw"></i></span>
                <div class="ms-4">
                    <div class="d-flex">
                      <?php foreach ($templateParams["ultimoAcq"] as $acquisto):?>
                        <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-delay="300" data-purecounter-duration="0"><?php echo $acquisto["dataOra"];?></h5>
                      <?php endforeach;?>
                    </div>
                    <span class="mb-0 h6 fw-light">Ultimo Acquisto</span>
                </div>
            </div>
        </div>
    </div>

    </div>

</div>
