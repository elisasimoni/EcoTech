<div class="card bg-transparent rounded-3">
    <!-- Card body START -->
    <div class="card-body">
        <!-- Form -->
        <form class="row g-4" action="modifica-cliente.php" method="post">

          <?php foreach($templateParams["utente"] as $cliente):?>
            <!-- Full name -->
            <div class="col-12">
                <label class="form-label">Nome e Cognome</label>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none" name="nome" placeholder="Nome" value="<?php echo $cliente["nome"];?>">
                    <input type="text" class="form-control shadow-none" name="cognome" placeholder="Cognome" value="<?php echo $cliente["cognome"];?>">
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input class="form-control shadow-none" type="email" name="mail" placeholder="Email" value="<?php echo $cliente["email"];?>">
            </div>

            <!-- Telefono -->
            <div class="col-md-6">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control shadow-none" name="telefono" placeholder="Telefono" value="<?php echo $cliente["telefono"];?>">
            </div>

            <!-- Indirizzo di fatturazione -->
            <div class="col-12">
                <label class="form-label">Indirizzo di Fatturazione</label>
                <input class="form-control shadow-none" type="text" placeholder="Indirizzo di Fatturazione">
            </div>

            <!-- Save button -->
            <div class="d-sm-flex justify-content-end">
                <input type="submit" class="btn btn-success p-3 mb-0 rounded-pill" value="Salva Modifiche"/>
            </div>
            <?php endforeach; ?>
        </form>
    </div>
    <!-- Card body END -->
</div>
