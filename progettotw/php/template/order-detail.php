<div class="card-body">

    <!-- Order list table START -->
    <div class="table-responsive border-0">
        <!-- Table START -->

        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
            <!-- Table head -->
            <thead>
                <tr class="bg-success">
                    <th scope="col" class="border-0">ID Ordine</th>
                    <th scope="col" class="border-0">Data / Ora</th>
                    <th scope="col" class="border-0">Totale</th>
                    <th scope="col" class="border-0 rounded-end">Pagamento</th>
                </tr>
            </thead>
            <?php foreach($templateParams["ordini"] as $ordini):?>
            <!-- Table body START -->
            <tbody>

                <!-- Table item -->
                <tr >
                    <!-- Table data -->
                    <td class="text-center text-sm-start text-primary-hover">

                        <h6 class="text-body mt-2 mt-lg-0 mb-0"><?php echo $ordini["codice"];?></h6>

                    </td>

                    <!-- Table data -->
                    <td><?php echo $ordini["dataOra"];?></td>

                    <!-- Table data -->

                    <td><?php echo $ordini["importo"];?>,00</td>

                    <!-- Table data -->
                    <td><?php echo $ordini["tipologia_pagamento"];?></td>
                </tr>

            </tbody>
            <?php endforeach;?>
            <!-- Table body END -->
        </table>

        <!-- Table END -->
    </div>
    <!-- Order list table END -->
</div>
