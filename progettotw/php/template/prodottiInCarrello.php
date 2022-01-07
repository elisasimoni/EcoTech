<div class="container px-4 py-5" id="custom-cards">

    <h2 class="pb-2 border-bottom">Cart Products</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <?php
      if(!$templateParams["prodottiCarrello"]){
      ?>
        <h3 class="pb-2" >Ancora nessun prodotto aggiunto al carrello!!</h3>
      <?php
      }else
        foreach($templateParams["prodottiCarrello"] as $prodotto): ?>
        <?php
          $templateParams["immagineProdotti"] = $dbh->getImageById($prodotto["idPRODOTTO"]);
          foreach($templateParams["immagineProdotti"] as $immagineprodotto): ?>
        <div class="col">

            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg border-top-0 border-start-0 border-end-0 border-bottom-0">
                <img class="card-image" src="upload/<?php echo $immagineprodotto["URL"]?>" class="card-img-top">
                <div class="d-flex flex-column h-100 p-5 pt-1 pb-3 text-white text-shadow-1">
                    <h2 class="pt-0 mt-5 mb-4 display-6 lh-1 fw-bold"><?php echo $prodotto["nomeProdotto"]?></h2>
                    <ul class="d-flex list-unstyled mt-5">
                        <li class="me-auto">
                          <a class="btn btn-light" href="modificaCarrello.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=add">+</a>
                            <button class="btn btn-light" href="#">quantità: <?php echo $prodotto["quantità"]?></button>
                            <a class="btn btn-light" href="modificaCarrello.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=dim">-</a>
                          </br>
                          </br>
                          <a class="btn btn-light" href="modificaCarrello.php?id=<?php echo $prodotto["idPRODOTTO"];?>&action=delete">Elimina</a>
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <p class="mb-0 prezzo"><?php echo $prodotto["prezzo"];?> - <?php echo $prodotto["valuta"]?> </p>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="bi bi-tag"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>
</div>
