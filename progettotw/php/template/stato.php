<?php foreach($templateParams["stato"] as $stato):  ?>
  <div class="mg-3">
    <h1 class="h3 mb-3 fw-normal text-center">Il ordine è in stato di: <?php echo $stato["stato"];?></h1>
  </div>
<?php endforeach;?>
