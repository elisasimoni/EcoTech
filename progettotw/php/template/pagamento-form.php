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
            </ol>
        </nav>
    </div>

</header>

<div class="py-5 text-center">
    <section>
        <h4 class="mb-3">Pagamento avvenuto con successo!!!</h4>
        <?php foreach($templateParams["pagamento"] as $pagamento):
          $templateParams["codice"] = $dbh->getOrdineCodiceByIdPagamento($pagamento["idPAGAMENTO"]);
          foreach($templateParams["codice"] as $codice):?>
        <h5 class="mb-3">Il tuo id ordie è:<?php echo $codice["codice"];?> </h5>
      <?php endforeach;
            endforeach;?>
        <small class="text-muted">il tuo id ordine sarà disponibile anche nell'elenco delle notifiche!</small>
    </section>
</div>
