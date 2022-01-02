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
    
        
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-2 navigation">
                    
                    <!-- Barra di navigazione Veriticale -->
                    <nav class="nav">

                        <!-- Header con logo della sidebar -->
                        <header class="navbar-brand">
                            <a class="navbar-brand" href="#">
                                <img src="img/logo.png" class="img-fluid" alt="">
                            </a>
                        </header>

                        <!-- Voci del menù -->
                        <ul>

                            <h6 class="headerNav">
                                <span>Amministrazione</span>
                                <hr/>
                            </h6>

                            <li class="nav-item" style="text-decoration:none">
                                <a href="" class="nav-link ps-3 active"><i class="bi bi-speedometer2 me-2 px-2 py-1"></i>Dashbord</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ps-3"><i class="bi bi-box-seam me-2 px-2 py-1"></i>Ordini</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ps-3"><i class="bi bi-list-task me-2 px-2 py-1"></i>Prodotti</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ps-3"><i class="bi bi-people me-2 px-2 py-1"></i>Clienti</a>
                            </li>

                            <h6 class="headerNav pt-3">
                                <span>Account</span>
                                <hr/>
                            </h6>

                            <li class="nav-item">
                                <a href="" class="nav-link ps-3"><i class="bi bi-person-plus me-2 px-2 py-1"></i>Utenti</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ps-3"><i class="bi bi-sliders me-2 px-2 py-1"></i>Impostazioni</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link ps-3"><i class="bi bi-box-arrow-left me-2 px-2 py-1"></i>Esci</a>
                            </li>

                        </ul>


                    </nav>


                </div>

                
                
                    <div class="col-2"></div>
                    <main class="col-10 ms-0 bg-light px-0 py-0 mx-0 my-0">

                        
                    </main>

            

            </div>
        </div>
    </body>
</html>
