<!doctype html>
<html lang="it">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap & Bootstrap Icon,  CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style-dashbord.css" />

        

        <!-- Titolo Pagina -->
        <title><?php echo $templateParams["titolo"]; ?></title>
    
    </head>
    <body>
    
        <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 topheader">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Eco - Tech</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="#">Esci</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active fs-6" aria-current="page" href="#">
                                <span data-feather="home"></span><i class="bi bi-speedometer2 me-1 fs-5"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="file"></span><i class="bi bi-box-seam me-1 fs-5"></i>
                                    Ordini
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="shopping-cart"></span><i class="bi bi-list-task me-1 fs-5"></i>
                                    Prodotti
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="users"></span><i class="bi bi-person-lines-fill me-1 fs-5"></i>
                                    Clienti
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="bar-chart-2"></span><i class="bi bi-graph-up me-1 fs-5"></i>
                                    Statistiche
                                </a>
                            </li>
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Account</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="file-text"></span><i class="bi bi-person-plus me-1 fs-5"></i>
                                    Crea Account
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="file-text"></span><i class="bi bi-sliders me-1 fs-5"></i>
                                    Gestione Profilo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="file-text"></span><i class="bi bi-gear me-1 fs-5"></i>
                                    Impostazioni
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-6" href="#">
                                <span data-feather="file-text"></span><i class="bi bi-box-arrow-right me-1 fs-5"></i>
                                    Esci
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                    <?php
                    if(isset($templateParams["contenuto"])){
                        require($templateParams["contenuto"]);
                    }
                    ?>

                </main>

            </div>
        </div>
    </body>
</html>
