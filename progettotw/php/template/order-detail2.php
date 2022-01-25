<div class="card-body">

    <!-- Order list table START -->
    <div class="table-responsive border-0">
        <!-- Table START -->
        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
            <!-- Table head -->
            <thead>
                <tr class="bg-primary">
                    <th scope="col" class="border-0 py-3">ID Ordine</th>
                    <th scope="col" class="border-0 py-3">Cliente</th>
                    <th scope="col" class="border-0 py-3">Data / Ora</th>
                    <th scope="col" class="border-0 py-3">Totale</th>
                    <th scope="col" class="border-0 py-3">Pagamento</th>
                    <th scope="col" class="border-0 rounded-end py-3">Spedizione</th>
                </tr>
            </thead>
            <?php foreach ($templateParams["ordini"] as $ordini):?>
            <!-- Table body START -->
            <tbody>

                <!-- Table item -->
                <tr>
                    <!-- Table codice ordine -->
                    <td class="text-center text-sm-start text-primary-hover">
                        <h6 class="text-body py-3"><?php echo $ordini["codice"];?></h6>
                    </td>

                    <!-- Table Cliente -->
                    <?php $templateParams["cliente"] = $dbh->getClientById($ordini["idCLIENTE"]);
                        foreach($templateParams["cliente"] as $cliente):?>
                      <td class="text-center text-sm-start text-primary-hover">
                          <h6 class="text-body py-3"><?php echo $cliente["nome"];?> <?php echo $cliente["cognome"];?></h6>
                      </td>
                    <?php endforeach;?>

                    <!-- Table data -->
                    <td class="text-center text-sm-start text-primary-hover">
                        <h6 class="text-body py-3"><?php echo $ordini["dataOra"];?></h6>
                    </td>

                    <!-- Table data -->
                    <td class="text-center text-sm-start text-primary-hover">
                        <h6 class="text-body py-3">€ <?php echo $ordini["importo"];?>,00</h6>
                    </td>

                    <!-- Table data -->
                    <td class="text-center text-sm-start text-primary-hover">
                        <h6 class="text-body py-3"><?php echo $ordini["tipologia_pagamento"];?></h6>
                    </td>


                    <td class="py-3">
                        <a href="ordini-venditore.php?action=1&id=<?php echo $ordini["idCLIENTE"];?>&codice=<?php echo $ordini["codice"];?>" class="btn btn-sm btn-primary-soft px-4 py-1 mb-0" data-bs-toggle="tooltip" title="Spedizione"><i class="bi bi-send fs-5"></i></a>
                    </td>
                </tr>

            </tbody>
            <!-- Table body END -->
            <?php endforeach;?>
        </table>
        <!-- Table END -->
    </div>
    <!-- Order list table END -->
</div>
