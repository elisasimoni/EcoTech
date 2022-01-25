<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favico.ico">
    <title><?php echo $templateParams["titolo"]; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/admin-dah.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Scrollbar Personalizzata -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>

<body>

    <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">

            <!-- Logo Sidebar -->
            <div class="sidebar-header">
                <a href="dashbord.php">
                    <img src="img/logo3.png" class="img-fluid" alt="">
                </a>
            </div>

            <!-- Voci Menù Sidebar -->
            <h6 class="p-3 text-white">Amministrazione</h6>
            <ul class="list-unstyled components">


                <li class="nav-item">
                    <a href="dashbord.php" <?php isActive("dashbord.php","nav-link ps-3 text-white");?>><i class="bi bi-speedometer2 me-2 px-3 py-1"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="ordini-venditore.php" <?php isActive("ordini-venditore.php","nav-link ps-3 text-white");?>><i class="bi bi-box-seam me-2 px-3 py-1"></i>Ordini</a>
                </li>
                <li class="nav-item">
                    <a href="prodotti.php?action=1" <?php isActive("prodotti.php","nav-link ps-3 text-white");?>><i class="bi bi-list-task me-2 px-3 py-1"></i>Prodotti</a>
                </li>
                <li class="nav-item">
                    <a href="clienti.php" <?php isActive("clienti.php","nav-link ps-3 text-white");?>><i class="bi bi-people me-2 px-3 py-1"></i>Clienti</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link ps-3 text-white" ><i class="bi bi-box-arrow-left me-2 px-3 py-1"></i>Esci</a>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-success">
                        <i class="bi bi-list"></i>
                        <span>Menu</span>
                    </button>

                    <h5><?php echo $templateParams["titolo-sezione"]; ?></h5>

                </div>
            </nav>

            <main>

                <?php
                if(isset($templateParams["contenuto"])){
                    require($templateParams["contenuto"]);
                }
                ?>

            </main>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="js/dashbord.js"></script>

</body>

</html>
