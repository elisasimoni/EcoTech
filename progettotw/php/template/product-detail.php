<section class="pt-5 pb-0">

	<div class="container">

		<div class="row g-0 g-lg-5">
			<?php foreach($templateParams["prodotto"] as $prodotto): ?>
							<?php
								$templateParams["immagineProdotti"] = $dbh->getImageById($prodotto["idPRODOTTO"]);
								foreach($templateParams["immagineProdotti"] as $immagineprodotto): ?>
			<!-- Sidebar Sinistra -->
			<div class="col-lg-4">

				<div class="row">

					<div class="col-md-6 col-lg-12">

                        <!-- Instructor image START -->
                        <div class="card shadow p-2 mb-4 text-center">
                            <div class="rounded-3">

                                <!-- Immagine Prodotto -->
                                <img src="img/<?php echo $immagineprodotto["URL"]?>" class="card-img" alt="<?php echo $immagineprodotto["alt"];?>">

                            </div>

                        </div>

					</div>

                    <!-- Dettagli Prodotto -->
					<div class="col-md-6 col-lg-12">
						<div class="card card-body shadow p-4 mb-4">

							<h4 class="mb-3">Dettaglio Prodotto</h4>

							<!-- Prezzo Prodotto -->
							<div class="d-flex align-items-center mb-4">
								<span class="icon-md text-dark bg-light rounded-3 fs-4"><i class="bi bi-tags"></i></span>
								<div class="ms-3">
									<h6 class="mb-0 fs-5"><?php echo $prodotto["valuta"]?> <?php echo $prodotto["prezzo"];?></h6>
								</div>
							</div>
							<?php
							$templateParams["magazzino"] = $dbh->getMagazzinoById($prodotto["idPRODOTTO"]);
							foreach($templateParams["magazzino"] as $magazzino):?>
							<!-- Dimensioni Prodotto -->
							<div class="d-flex align-items-center mb-4">

                                <span class="icon-md text-dark bg-light rounded-3 fs-4"><i class="bi bi-box-seam"></i></span>

                                <div class="ms-3">
									<h6 class="mb-0"><?php echo $magazzino["stato"];?>: <?php echo $magazzino["quantità"];?></h6>

                                </div>
							</div>

							<!-- Data di Consegna -->
							<div class="d-flex align-items-center mb-4">

                                <span class="icon-md text-dark bg-light rounded-3 fs-4"><i class="bi bi-truck"></i></span>

                                <div class="ms-3">

                                    <h6 class="mb-0">Consegna : 21 - 23 Gennaio</h6>

                                </div>

              </div>

							<!-- Punti Eco -->
							<div class="d-flex align-items-center mb-4">

							<span class="text-dark bg-light rounded-3 fs-4">
								<ul class="p-2 mb-0">
									<?php puntiEco($prodotto["punti_eco"]);?>
								</ul>
							</span>

              </div>

						</div>
					</div>

				</div>

			</div>

			<!-- Contenuto Principale -->
			<div class="col-lg-8">

				<!-- Titolo del Prodotto -->
				<h1 class="mb-0"><?php echo $prodotto["nome"]?></h1>

				<!-- Descrizione Prodotto -->
				<p class="mt-4 fs-5">
					<?php echo $prodotto["descrizione_completa"];?>
				</p>


				<!-- Bottoni -->
				<div class="row mt-4 g-3">

					<!-- Aggiungi al Carrello -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex align-items-center">
                <a href="modificaCart.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=add&shop=2" class="btn btn-lg btn-success-soft me-1 mb-4 mb-sm-0 fw-bold <?php  quantita($magazzino["quantità"]);?>"><i class="bi bi-cart-plus me-3 fs-5 "></i>Aggiungi al Carrello</a>
						</div>
					</div>

					<!-- Acquista Ora -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex align-items-center">
                <a href="checkout.php?action=1&id=<?php echo $prodotto["idPRODOTTO"];?>" class="btn btn-lg btn-primary-soft me-1 mb-4 mb-sm-0 fw-bold <?php  quantita($magazzino["quantità"]);?>"><i class="bi bi-wallet2 me-3 fs-5"></i>Acquista Ora</a>
						</div>
					</div>
					<?php endforeach;?>
					<!-- Assistenza Clienti -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex align-items-center">
                            <a href="supporto.php" class="btn btn-lg btn-orange-soft me-1 mb-4 mb-sm-0 fw-bold"><i class="bi bi-life-preserver me-3 fs-5"></i></i>Assistenza Clienti</a>
						</div>
					</div>

				</div>

            </div>

		</div>
	<?php endforeach; ?>
	<?php endforeach; ?>
	</div>

</section>
