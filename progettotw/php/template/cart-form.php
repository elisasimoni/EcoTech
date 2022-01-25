

<!--Contenuto Centrale -->
<div class="col-lg-8 mb-4 mb-sm-0">
	<div class="card card-body p-4 shadow">
		<?php
			if(!$templateParams["prodottiCarrello"]){
		?>
		<h3 class="pb-2" >Ancora nessun prodotto!!</h3>
		<?php
			}else
				foreach($templateParams["prodottiCarrello"] as $prodotto): ?>
		<!-- Tabella Prodotti -->
		<div class="table-responsive border-0 rounded-3">
			<table class="table align-middle p-4 mb-0">

				<tbody class="border-top-0">

					<!-- Riga Prodotto -->
					<tr>
						<!-- Dettagli prodotto -->
						<td>
							<div class="d-lg-flex align-items-center">
								<?php
									$templateParams["immagineProdotti"] = $dbh->getImageById($prodotto["idPRODOTTO"]);
									foreach($templateParams["immagineProdotti"] as $immagineprodotto): ?>
								<!-- Immagine antprima prodotto -->
								<div class="w-100px w-md-80px mb-2 mb-md-0">
									<img src="img/<?php echo $immagineprodotto["URL"]?>" class="rounded" alt="<?php echo $immagineprodotto["alt"]?>">
								</div>

								<!-- Titolo del prodotto -->
								<div class="">
									<h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
										<a href="#"><?php echo $prodotto["nomeProdotto"]?></a> <!--dettaglio prodotto-->
									</h6>
									<?php
										$templateParams["magazzini"] = $dbh->getMagazzinoById($prodotto["idPRODOTTO"]);
										foreach($templateParams["magazzini"] as $magazzino):?>
											<small class="mb-0 ms-lg-3 mt-2 text-muted"><?php echo $magazzino["stato"];?>: <?php echo $magazzino["quantità"];?></small>
									<?php endforeach;?>
								</div>

							</div>

						</td>

						<!-- Prezzo del prodotto -->
						<td>
							<h5 class="text-success mb-0"><?php echo $prodotto["valuta"]?>  <?php echo $prodotto["prezzo"];?>,00</h5>
						</td>

						<!-- Azioni sul Prodotto -->
						<td>
							<a class="btn btn-sm btn-primary-soft px-2 mb-0" href="modificaCart.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=add"><i class="bi bi-plus-lg" style="font-weight: 700;"></i></a>
							<span class="ms-2 me-2"><?php echo $prodotto["quantità"]?></span>
							<a class="btn btn-sm btn-primary-soft px-2 mb-0" href="modificaCart.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=dim"><i class="bi bi-dash-lg"></i></a>
							<a class="btn btn-sm btn-danger-soft px-2 mb-0" href="modificaCart.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=delete"><i class="bi bi-x-lg"></i></a>
						</td>
					<?php endforeach; ?>

					</tr>

				</tbody>
			</table>

		</div>
		<?php endforeach; ?>
	</div>


</div>

<!-- Right sidebar START -->
<div class="col-lg-4">

    <!-- Card total START -->
	<div class="card card-body p-4 shadow">

		<!-- Title -->
		<h4 class="mb-3">Totale Carrello</h4>

		<!-- Price and detail -->
		<ul class="list-group list-group-borderless mb-2">

			<li class="list-group-item px-0 d-flex justify-content-between">
				<span class="h6 fw-light mb-0">Subtotale</span>
				<?php foreach($templateParams["prezzo"] as $prezzo):?>
						<span class="h6 fw-light mb-0 fw-bold">€ <?php echo totPrezzo($prezzo["SUM(prezzo)"]);?>,00</span>
				<?php endforeach;?>
			</li>

<?php foreach ($templateParams["tariffa"] as $tariffa):?>
      <li class="list-group-item px-0 d-flex justify-content-between">

          <span class="h6 fw-light mb-0">Spese di Spedizione</span>
				<span class="h6 fw-light mb-0 fw-bold">+ €<?php echo $tariffa["valore"];?>,00</span>

			</li>

      <li class="list-group-item px-0 d-flex justify-content-between">
				<span class="h5 mb-0">Totale</span>
				<?php foreach($templateParams["prezzo"] as $prezzo):?>
						<span class="h5 mb-0">€ <?php echo totPrzSpe($prezzo["SUM(prezzo)"], $tariffa["valore"]);?>,00</span>
				<?php endforeach;?>
			</li>
<?php endforeach;?>
        </ul>

		<!-- Button -->
		<div class="d-grid">
			<!--se il carrello è vuoto non è possibile effettuare il checkout!!-->
			<?php foreach($templateParams["prezzo"] as $prezzo):?>
				<a href="<?php if($prezzo["SUM(prezzo)"]){ echo "checkout.php";}?>" class="btn btn-lg btn-success<?php somma($prezzo["SUM(prezzo)"]);?>">Procedi al Checkout</a>
			<?php endforeach;?>
		</div>

		<!-- Content -->
		<p class="small mb-0 mt-2 text-center">Prima di procedere con i tuoi acquisti, ti invitiamo a prendere atto dei <a href="#"><strong>Termini & Condizioni</strong></a></p>

	</div>

</div>
