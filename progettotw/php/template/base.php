<!DOCTYPE html>
<html lang="it">
<head>
    <!-- Required meta tags -->
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

    <!-- Menù di navigazione -->

    <nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="index.php">ECO TECNOLOGY</a>

        <!-- Bottone Hambuerger Menù -->
        <button class="navbar-toggler border-top-0 border-start-0 border-end-0 border-bottom-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <!-- Voci Menù -->
        <div class="collapse navbar-collapse justify-content-end navigation">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a <?php isActive("index.php","nav-link"); ?> class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a <?php isActive("shop.php","nav-link"); ?>  class="nav-link" aria-current="page" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a <?php isActive("tracking.php","nav-link"); ?>  class="nav-link" aria-current="page" href="tracking.php">Tracking Ordini</a>
                </li>
            </ul>

            <!-- Bottone Carrello -->
            <button type="button" class="border-top-0 border-start-0 border-end-0 border-bottom-0 shadow-none text-light bg-transparent g-0">
            <i class="bi bi-bag m-0 g-0" style="font-size:28px"></i>
            <span class="badge rounded-pill badge-notification bg-danger g-0 ">1
            </span>
            </button>

            <!-- Bottone Profilo/Registrazioe-->
            <button type="button" class="border-top-0 border-start-0 border-end-0 border-bottom-0 shadow-none text-light bg-transparent g-0" >
            <i class="bi bi-person-circle m-0 g-0" style="font-size:28px"></i>
            </button>

        </div>
    </div>
    </nav>


    <!-- Main della pagina -->
    <main>

    <?php
    if(isset($templateParams["contenuto"])){
        require($templateParams["contenuto"]);
    }
    ?>

    </main>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted pt-1">

    <!-- Section: Links  -->
    <section>
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">Eco Tecnology</h6>
            <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
            </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Prodotti</h6>
                <p><a href="#!" class="text-reset">Angular</a></p>
                <p><a href="#!" class="text-reset">React</a></p>
                <p><a href="#!" class="text-reset">Vue</a></p>
                <p><a href="#!" class="text-reset">Laravel</a></p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Link Utili</h6>
                <p><a href="#!" class="text-reset">Pricing</a></p>
                <p><a href="#!" class="text-reset">Settings</a></p>
                <p><a href="#!" class="text-reset">Orders</a></p>
                <p><a href="#!" class="text-reset">Help</a></p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contatti</h6>
                <p><i class="bi bi-geo-alt"></i> Via dell'Università, 50 - Cesena (FC)</p>
                <p><i class="bi bi-envelope"></i> campuscesena.didattica.isa@unibo.it</p>
                <p><i class="bi bi-telephone"></i> +39.0547-338300</p>
                <p><i class="bi bi-printer"></i> +39.051 2086293</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 principal">© 2021 Copyright -
        <a class="text-reset fw-bold" href="index.php">ECO TECNOLOGY</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>