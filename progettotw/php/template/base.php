<!DOCTYPE html>
<html lang="it">

	<head>

	<!-- Meta Tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favico.ico">
	<!-- Bootstrap & Bootstrap Icon,  CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/botui/build/botui.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/botui/build/botui-theme-default.css" />

	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style-tracking.css" />
	<link rel="stylesheet" type="text/css" href="css/style-chatbot.css" />




	<!-- Titolo Pagina -->
	<title><?php echo $templateParams["titolo"]; ?></title>

	</head>

	<body>

		<!-- Header -->
		<header class="navbar-light navbar-sticky">

			<!-- Logo barra di navigazione -->
			<nav class="navbar navbar-expand-xl">
				<div class="container">

					<!-- Logo  -->
					<a class="navbar-brand" href="index.php">
						<img class="light-mode-item navbar-brand-item h-60px w-120px" src="img/logo3.png" alt="logo ecotech">
					</a>

					<!-- Responsive navbar toggler -->
					<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>

					<!-- Navbar -->
					<div class="navbar-collapse w-100 collapse" id="navbarCollapse">


						<ul class="navbar-nav navbar-nav-scroll mx-auto">

							<!-- Link Home -->
							<li class="nav-item">
								<a <?php isActive("index.php","nav-link"); ?> href="index.php">Home</a>
							</li>

							<!-- Link Shop -->
							<li class="nav-item">
								<a <?php isActive("shop.php","nav-link"); ?> href="shop.php">Shop</a
							></li>

							<!-- Link Traking -->
							<li class="nav-item">
								<a <?php isActive("tracking.php","nav-link"); ?> href="tracking.php">Tracking Ordini</a>
							</li>

							<!-- Link Supporto -->
							<li class="nav-item">
								<a <?php isActive("supporto.php","nav-link"); ?> href="supporto.php">Supporto</a>
							</li>

						</ul>

					</div>

					<?php if(isset($_SESSION["idCLIENTE"])):?>
					<a href="logout.php">
						<i class="bi bi-box-arrow-left fs-4 nav-link"></i>

					</a>
					<?php endif;?>
					<!-- Icona Profilo Utente -->
					<a href="<?php checkLogin(); ?>">
						<i class="bi bi-person fs-4 ps-1 me-0 nav-link"></i>

					</a>

					<a href="cart.php">
						<i class="bi bi-cart fs-4 ps-2 nav-link"></i>
					</a>
					<?php foreach ($templateParams["quantita"] as $quantita): ?>
						<span class="badge bg-success rounded-4 pt-2"><?php isEmpty($quantita["SUM(quantità)"]); ?></span>
					<?php endforeach; ?>
				</div>
			</nav>

		</header>
		<!-- Main del sito -->
		<main>

			<!-- Sezione Hero Homepage -->
			<?php
				if(isset($templateParams["hero"])){
					require($templateParams["hero"]);
				}
			?>

			<section class="pt-5">

				<div class="container">

					<div class="row g-4 g-sm-5">

					<!-- Sezione Intestazione -->
					<?php
						if(isset($templateParams["intestazione"])){
							require($templateParams["intestazione"]);
						}
					?>

					<!-- Sezione Principale -->
					<?php
						if(isset($templateParams["contenuto"])){
							require($templateParams["contenuto"]);
						}
					?>

					</div>
				</div>

			</section>

		</main>

		<footer class="pt-5 bg-light">
			<div class="container">

				<!-- Riga -->
				<div class="row g-4">

					<!-- Widget 1 -->
					<div class="col-lg-3">

						<!-- Logo -->
						<a class="me-0" href="index.php">
							<img class="light-mode-item h-70px" src="img/logo3.png" alt="logo ecotech footer">
						</a>

						<p class="my-3">
							E-commerce dedicato a prodotti tecnologici eco-sostenbili
							e sempre all’avanguardia
						</p>

						<!-- Icone Social Media -->
						<ul class="list-inline mb-0 mt-3">
							<li class="list-inline-item">
								<a class="btn btn-white btn-sm shadow px-2 text-facebook" href="https://www.facebook.com/unibo.it/" target="_blank">
									<i class="bi bi-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="btn btn-white btn-sm shadow px-2 text-instagram" href="https://www.instagram.com/unibo/" target="_blank">
									<i class="bi bi-instagram"></i>
								</a>
							</li>
						</ul>
					</div>

					<!-- Widget 2 -->
					<div class="col-lg-6">

						<div class="row g-4">

							<!-- Link Utili -->
							<div class="col-6 col-md-4">
								<h5 class="mb-2 mb-md-4">Link Utili</h5>

								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="supporto.php">Supporto</a></li>
								</ul>

							</div>

							<!-- Comunity -->
							<div class="col-6 col-md-4">
								<h5 class="mb-2 mb-md-4">Community</h5>

								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="https://www.unibo.it/it/ateneo/organizzazione/amministrazione-generale/10010/2711/index.html" target="_blank">Ufficio Stampa</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://www.unibo.it/it/ateneo/posta-elettronica-certificata-pec" target="_blank">PEC Unibo</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="http://www.studentidisabili.unibo.it/" target="_blank">Studenti con disabilità</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://www.unibo.it/it/ateneo/elenco-siti-tematici" target="_blank">Elenco siti tematici</a>
									</li>
								</ul>

							</div>

						</div>

					</div>

					<!-- Widget 3 -->
					<div class="col-lg-3">
						<h5 class="mb-2 mb-md-4">Contatti</h5>

						<p class="mb-2">
							<i class="bi bi-telephone"></i><span class="h6 fw-light ms-3">0547 338220</span>
						</p>

						<p class="mb-0">
							<i class="bi bi-envelope"></i><span class="h6 fw-light ms-3">ecotech@gmail.com</span>
						</p>

						<div class="row g-2 mt-2">

							<!-- Google play store -->
							<div class="col-6 col-sm-4 col-md-3 col-lg-6">
								<a href="https://play.google.com/store/apps/details?id=it.officinedigitali.rifiutologo&hl=it&gl=US" target="_blank">
									<img src="img/google-play.svg" class="btn-transition" alt="google-play-store">
								</a>
							</div>

							<!-- App store -->
							<div class="col-6 col-sm-4 col-md-3 col-lg-6">
								<a href="https://apps.apple.com/it/app/il-rifiutologo/id468454538" target="_blank">
									<img src="img/app-store.svg" class="btn-transition" alt="app-store">
								</a>
							</div>

						</div>

					</div>

				</div>

				<!-- Divider -->
				<hr class="mt-4 mb-0">

				<!-- Bottom footer -->
				<div class="py-3">
					<div class="container px-0">
						<div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">

							<!-- Copyright testo -->
							<div class="text-primary-hover"> Copyrights <a href="#" class="text-body">© 2022 EcoTech</a>. Tutti i diritti riservati. | Credits : Collini Yuri - Simoni Elisa - Bagagli Sofia</div>

							<!-- Copyright link-->
							<div class=" mt-3 mt-md-0">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<a class="nav-link" href="index.php">Termini & Condizioni</a>
									</li>
									<li class="list-inline-item">
										<a class="nav-link pe-0" href="index.php">Politica sulla Privacy</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>

			</div>
		</footer>

		<!-- Script -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/vue/2.0.5/vue.min.js"></script>
		<script src="https://unpkg.com/botui/build/botui.js"></script>

		<script type="text/javascript" src="js/function.js"></script>
		<script type="text/javascript" src="js/chatbot.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



	</body>

</html>
