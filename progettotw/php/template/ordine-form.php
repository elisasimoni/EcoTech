<div class="container px-4 py-5" id="custom-cards">

    <h2 class="pb-2 border-bottom">Menu ordini</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <ul>
          <li>
            <a class="btn btn-primary" href="ordini.php?action=1"> Lista Ordini </a>
          </li>
        </br>
          <li>
            <a class="btn btn-primary" href="ordini.php?action=2"> Accettazione Ordini </a>
          </li>
        </br>
          <li>
            <a class="btn btn-primary" href="ordini.php?action=3"> Spedizione Ordini </a>
          </li>
        </ul>
      </div>
    </div>
    <ul>
      <?php foreach($templateParams["ordini"] as $ordini):?>
        <li>totale ordini: <?php echo $ordini["COUNT(*)"];?></li>
      <?php endforeach;?>
    </ul>
    <?php if($azione == "1"):?>
      <?php foreach($templateParams["storico"] as $storico):?>
      <ul>
        <li>id prodotto: <?php echo $storico["idPRODOTTO"]; ?></li>
        <li>Data Ora: <?php echo $storico["dataOra"]; ?></li>
        <?php $templateParams["pagamento"] = $dbh->getPagamentoByDateOraCli($storico["dataOra"],$storico["idCLIENTE"]);
            foreach($templateParams["pagamento"] as $pagamento):
              $templateParams["codice"] = $dbh->getOrdineCodiceByIdPagamento($pagamento["idPAGAMENTO"]);
              foreach($templateParams["codice"] as $codice):?>
            <li>Codice Ordine:<?php echo $codice["codice"];?></li>
        <?php endforeach;
        endforeach;?>
        <?php $templateParams["cliente"] = $dbh->getClientById($storico["idCLIENTE"]);
            foreach($templateParams["cliente"] as $cliente):?>
            <li>Email Cliente: <?php echo $cliente["email"];?></li>
            <li>Telefono: <?php echo $cliente["telefono"];?></li>
        <?php endforeach;?>
      </ul>
      <?php endforeach;?>
    <?php elseif($azione == "2"):?>
    <?php endif; ?>
</div>
