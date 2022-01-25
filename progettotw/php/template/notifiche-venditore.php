<?php foreach($templateParams["notifiche"] as $notifiche):?>
<div class="align-items-center rounded-pill bg-primary bg-opacity-75 ps-4 mb-3">
  <div class="d-flex">
    <div class="toast-body">
        <p class="py-2 m-0 fs-6 text-white"><?php echo $notifiche["testo"];?></p>
    </div>
  </div>
</div>
<?php endforeach;?>
