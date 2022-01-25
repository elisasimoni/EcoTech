<div class="card card-body pt-4 pb-1 px-4 shadow">

    <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center py-3 mb-3">
        <!-- Crea Prodotto -->
        <li class="nav-item px-4">
            <a class="btn btn-primary" href="prodotti.php?action=1">Crea Prodotto</a>
        </li>
        <!-- Modifica Prodotto -->
        <li class="nav-item px-4">
            <a class="btn btn-primary" href="prodotti.php?action=2">Modifica Prodotto</a>
        </li>
    </ul>

		<!-- Tabella Prodotti -->
		<div class="table-responsive border-0 rounded-3">
    	<table class="table align-middle p-4 mb-0">
        <tbody>
          <?php foreach($templateParams["prodotti"] as $prodotto): ?>
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
                    <?php endforeach;?>
                      <!-- Titolo del prodotto -->
                      <h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
                          <a href="prodotti.php?action=3&id=<?php echo $prodotto["idPRODOTTO"];?>"><?php echo $prodotto["nome"]?></a>
                          <?php
                            $templateParams["magazzini"] = $dbh->getMagazzinoById($prodotto["idPRODOTTO"]);
                            foreach($templateParams["magazzini"] as $magazzino):?>
                         <small class="pe-3"> | <?php echo $magazzino["stato"];?>: <?php echo $magazzino["quantità"];?></small>
                          <?php endforeach;?>
                      </h6>
                  </div>
                </td>
                <!-- Azioni sul Prodotto -->
                <td class="p-4 d-flex justify-content-center">
                    <a href="prodotti.php?action=3&id=<?php echo $prodotto["idPRODOTTO"];?>" class="btn btn-sm btn-primary-soft px-4 py-2 me-2" data-bs-toggle="tooltip"  title="Modifica Prodotto">
                        <i class="bi bi-pencil-square fs-5"></i>
                    </a>
                    <a href="inserireProdotto.php?action=4&id=<?php echo $prodotto["idPRODOTTO"];?>" class="btn btn-sm btn-danger-soft px-4 py-2" data-bs-toggle="tooltip" title="Elimina Prodotto">
                        <i class="bi bi-trash fs-5"></i>
                    </a>
                </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
		</div>
	</div>
