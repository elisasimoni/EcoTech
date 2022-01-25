<!-- Tabs content START -->
<div class="tab-content" id="course-pills-tabContent">

    <!-- Content START -->
	<div class="tab-pane fade active show" id="course-pills-tabs-1" role="tabpanel">
		<div class="row g-4">
			<?php foreach($templateParams["prodotti"] as $prodotto): ?>
							<?php
								$templateParams["immagineProdotti"] = $dbh->getImageById($prodotto["idPRODOTTO"]);
								foreach($templateParams["immagineProdotti"] as $immagineprodotto): ?>
			<!-- Primo prodotto -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card shadow h-100">

                    <!-- Immeagine -->

					<a href="product-det-single.php?id=<?php echo $prodotto["idPRODOTTO"]?>">
					    <img src="img/<?php echo $immagineprodotto["URL"]?>" class="card-img-top" alt="<?php echo $immagineprodotto["alt"];?>">
					</a>

                    <!-- Corpo Centrale -->
					<div class="card-body pb-0">

                        <!-- Titolo prodotto -->
						<h5 class="card-title fw-normal">
							<a href="product-det-single.php?id=<?php echo $prodotto["idPRODOTTO"]?>"><?php echo $prodotto["nome"]?></a>
							<?php
							$templateParams["magazzino"] = $dbh->getMagazzinoById($prodotto["idPRODOTTO"]);
							foreach($templateParams["magazzino"] as $magazzino):?>
							<a href="modificaCart.php?id=<?php echo $prodotto["idPRODOTTO"]?>&action=add&shop=1"  class="btn rounded-3 ms-3 <?php quantita($magazzino["quantità"]);?>">
								<i class="bi bi-cart-plus"></i>
							</a>
						</h5>
						<p class="mb-2 text-truncate-2"><?php echo $prodotto["descrizione_breve"];?></p>

						<!-- Punti Eco -->
						<ul class="list-inline mb-0">
							<?php puntiEco($prodotto["punti_eco"]);?>
						</ul>

					</div>

                    <!-- Footer -->
					<div class="card-footer pt-0 pb-3">

                        <hr>

						<div class="d-flex justify-content-between">
							<span class="h6 fw-light mb-0"><i class="bi bi-tags me-2 text-success"></i><?php echo $prodotto["valuta"]?> <?php echo $prodotto["prezzo"];?></span>
							<span class="h6 fw-light mb-0 <?php  statoMagazzino($magazzino["stato"]);?>"><i class="bi me-2"></i><?php echo $magazzino["stato"];?> : <?php echo $magazzino["quantità"];?></span>
							<?php endforeach;?>
						</div>

					</div>

				</div>
			</div>
		<?php endforeach; ?>
		<?php endforeach; ?>


        </div>

    </div>

</div>
