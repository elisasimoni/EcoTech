<!-- Banner Intestazione -->
<section class="py-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light p-4 text-center rounded-3">
					
                    <h1 class="m-0">Il tuo Carrello</h1>

					<!-- Breadcrumb -->
					<div class="d-flex justify-content-center">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots mb-0">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
								<li class="breadcrumb-item active" aria-current="page">Carrello</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<!--Contenuto Centrale -->
<div class="col-lg-8 mb-4 mb-sm-0">
	<div class="card card-body p-4 shadow">

		<!-- Tabella Prodotti -->
		<div class="table-responsive border-0 rounded-3">

			<table class="table align-middle p-4 mb-0">

				<tbody class="border-top-0">

					<!-- Riga Prodotto -->
					<tr>

						<!-- Dettagli prodotto -->
						<td>

							<div class="d-lg-flex align-items-center">

								<!-- Immagine antprima prodotto -->
								<div class="w-100px w-md-80px mb-2 mb-md-0">
									<img src="img/2.jpg" class="rounded" alt="">
								</div>

								<!-- Titolo del prodotto -->
								<h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">	
									<a href="#">Building Scalable APIs with GraphQL</a>
								</h6>

							</div>

						</td>

						<!-- Prezzo del prodotto -->
						<td>
							<h5 class="text-success mb-0"> € 350,00</h5>
						</td>

						<!-- Azioni sul Prodotto -->
						<td>
												
							<button class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-plus-lg" style="font-weight: 700;"></i></button>
							<span class="ms-2 me-2">12</span>
							<button class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-dash-lg"></i></button>
							<button class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-x-lg"></i></button>

						</td>

					</tr>

					<!-- Riga Prodotto -->
					<tr>

						<!-- Dettagli prodotto -->
						<td>
						    <div class="d-lg-flex align-items-center">

                                <!-- Immagine prodotto -->
                                <div class="w-100px w-md-80px mb-2 mb-md-0">
                                    <img src="img/1.jpg" class="rounded" alt="">
                                </div>

                                <!-- Titolo prodotto -->
                                <h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">	
                                    <a href="#">Bootstrap 5 From Scratch</a>
                                </h6>

						    </div>

					    </td>

						<!-- Prezzo del prodotto -->
						<td>
							<h5 class="text-success mb-0">€ 150,00</h5>
						</td>

						<!-- Azioni sul Prodotto -->
						<td>

							<button class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-plus-lg" style="font-weight: 700;"></i></button>
							<span class="ms-2 me-2">7</span>
							<button class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-dash-lg"></i></button>
							<button class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-x-lg"></i></button>

						</td>

					</tr>

				</tbody>

			</table>

		</div>

		<!-- Coupon input and button -->
		<div class="row g-3 mt-2">
			<div class="col-md-6">

				<div class="input-group">
					<input class="form-control form-control rounded-0 border-top-0 border-start-0 border-end-0" placeholder="CODICE SCONTO">
					<button type="button" class="btn btn-primary rounded-0 border-top-0 border-start-0 border-end-0">Applica Sconto</button>
				</div>

			</div>
								
            <!-- Update button -->
			<div class="col-md-6 text-md-end">
				<button class="btn btn-primary mb-0 rounded-0" disabled="">Aggiorna Carrello</button>
			</div>

		</div>	

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
				<span class="h6 fw-light mb-0 fw-bold">€ 500,00</span>
			</li>

			
            <li class="list-group-item px-0 d-flex justify-content-between">					
                <span class="h6 fw-light mb-0">Spese di Spedizione</span>
				<span class="h6 fw-light mb-0 fw-bold">€ 5,00</span>
			</li>
			
            <li class="list-group-item px-0 d-flex justify-content-between">
			    <span class="h6 fw-light mb-0">Sconto Applicato</span>
				<span class="text-danger">- € 20,00</span>
			</li>
			
            <li class="list-group-item px-0 d-flex justify-content-between">
				<span class="h5 mb-0">Totale</span>
				<span class="h5 mb-0">€ 480,00</span>
			</li>
		
        </ul>

		<!-- Button -->
		<div class="d-grid">
			<a href="checkout.html" class="btn btn-lg btn-success">Procedi al Checkout</a>
		</div>

		<!-- Content -->
		<p class="small mb-0 mt-2 text-center">Prima di procedere con i tuoi acquisti, ti invitiamo a prendere atto dei <a href="#"><strong>Termini & Condizioni</strong></a></p>

	</div>
						
</div>