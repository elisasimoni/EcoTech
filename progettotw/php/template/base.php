<html lang="en" data-theme="light">
	
	<head>

	<!-- Meta Tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap & Bootstrap Icon,  CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/function.js"></script>

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
					<a class="navbar-brand" href="index.html">
						<img class="light-mode-item navbar-brand-item" src="img/logo.png" alt="logo">
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

							<!-- Nav item 4 Component-->
							<li class="nav-item">
								<a <?php isActive("index.php","nav-link"); ?> class="nav-link" href="index.php">Home</a>
							</li>

							<!-- Nav item 4 Component-->
							<li class="nav-item">
								<a <?php isActive("shop.php","nav-link"); ?> class="nav-link" href="shop.php">Shop</a
							></li>

							<!-- Nav item 4 Component-->
							<li class="nav-item">
								<a <?php isActive("tracking.php","nav-link"); ?> class="nav-link" href="tracking.php">Tracking Ordini</a>
							</li>

							<!-- Nav item 4 Component-->
							<li class="nav-item">
								<a <?php isActive("support.php","nav-link"); ?> class="nav-link" href="support.php">Supporto</a>
							</li>

							<!-- Nav item 5 link-->
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-ellipsis-h"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
									<li> 
										<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
											<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
										</a> 
									</li>
									<li> 
										<a class="dropdown-item" href="docs/index.html" target="_blank">
											<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
										</a> 
									</li>
									<li> <hr class="dropdown-divider"></li>
									<li> 
										<a class="dropdown-item" href="https://eduport.webestica.com/rtl/" target="_blank">
											<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
										</a> 
									</li>
									<li> 
										<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
											<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
										</a> 
									</li>
								</ul>
							</li>

						</ul>
						<!-- Nav Main menu END -->

					</div>

					<i class="bi bi-person-circle"></i>

				</div>
			</nav>

		</header>

		<div id="sticky-space" style="height: 0px;" class=""></div>

		<!-- Main del sito -->
		<main>

			<section class="pt-5">
				<div class="container">
						
					<div class="row g-4 g-sm-5">

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
						<a class="me-0" href="index.html">
							<img class="light-mode-item h-40px" src="img/logo.png" alt="logo">
						</a>

						<p class="my-3">
							Eduport education theme, built specifically 
							for the education centers which is dedicated to teaching 
							and involve learners. 
						</p>

						<!-- Icone Social Media -->
						<ul class="list-inline mb-0 mt-3">
							<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="bi bi-facebook" width="1.25em"></i></a> </li>
							<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="bi bi-instagram" width="1.25em"></i></a> </li>
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
									<li class="nav-item"><a class="nav-link" href="contatti.php">Contatti</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="supporto.php">Supporto</a></li>
								</ul>

							</div>
											
							<!-- Comunity -->
							<div class="col-6 col-md-4">
								<h5 class="mb-2 mb-md-4">Community</h5>

								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link" href="https://www.unibo.it/it/ateneo/organizzazione/amministrazione-generale/10010/2711/index.html" target="_blank">Ufficio Stampa</a></li>
									<li class="nav-item"><a class="nav-link" href="https://www.unibo.it/it/ateneo/posta-elettronica-certificata-pec" target="_blank">PEC Unibo</a></li>
									<li class="nav-item"><a class="nav-link" href="http://www.studentidisabili.unibo.it/" target="_blank">Studenti con disabilità</a></li>
									<li class="nav-item"><a class="nav-link" href="https://www.unibo.it/it/ateneo/elenco-siti-tematici" target="_blank">Elenco siti tematici</a></li>
								</ul>

							</div>

						</div>

					</div>

					<!-- Widget 3 -->
					<div class="col-lg-3">
						<h5 class="mb-2 mb-md-4">Contatti</h5>
						
						<p class="mb-2">
							<i class="bi bi-telephone"></i><span class="h6 fw-light ms-3">+1234 568 963</span>
						</p>

						<p class="mb-0">
							<i class="bi bi-envelope"></i><span class="h6 fw-light ms-3">example@gmail.com</span>
						</p>

						<div class="row g-2 mt-2">

							<!-- Google play store -->
							<div class="col-6 col-sm-4 col-md-3 col-lg-6">
								<a href="https://play.google.com/store/apps/details?id=it.officinedigitali.rifiutologo&hl=it&gl=US" target="_blank">
									<img src="img/google-play.svg" alt="google-play-store">
								</a>
							</div>

							<!-- App store -->
							<div class="col-6 col-sm-4 col-md-3 col-lg-6">
								<a href="https://apps.apple.com/it/app/il-rifiutologo/id468454538" target="_blank">
									<img src="img/app-store.svg" alt="app-store"> 
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
							<div class="text-primary-hover"> Copyrights <a href="#" class="text-body">© 2022 Eco-Tech</a>. Tutti i diritti riservati. </div>
							
							<!-- Copyright link-->
							<div class=" mt-3 mt-md-0">
								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a class="nav-link" href="#">Termini & Condizioni</a></li>
									<li class="list-inline-item"><a class="nav-link pe-0" href="#">Politica sulla Privacy</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>

			</div>
		</footer>
						
		<!-- Bootstrap -->
		<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	</body>

</html>