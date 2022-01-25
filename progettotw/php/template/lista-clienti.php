<div class="card card-body shadow-lg border-0">


    <div class="row g-4">
        <?php foreach($templateParams["clienti"] as $cliente):?>
        <!-- Counter item -->
        <div class="col-sm-7 col-lg-6">
            <div class="d-flex p-4 mb-3 bg-primary bg-opacity-15 rounded-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 text-primary"><i class="bi bi-person pe-2"></i>Nome e Cognome : <span class="text-dark"><?php echo $cliente["nome"];?> <?php echo $cliente["cognome"];?></span></li>
                    <li class="list-group-item border-0 text-primary"><i class="bi bi-card-text pe-2"></i>Codice Fiscale : <span class="text-dark"><?php echo $cliente["cf"];?></span></li>
                    <li class="list-group-item border-0 text-primary"><i class="bi bi-at pe-2"></i>Email : <span class="text-dark"><?php echo $cliente["email"];?></span></li>
                    <li class="list-group-item border-0 text-primary"><i class="bi bi-phone pe-2"></i>Telefono : <span class="text-dark"><?php echo $cliente["telefono"];?></span></li>
                </ul>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>
