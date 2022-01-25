<?php foreach ($templateParams["notifiche"] as $notifiche):?>
<div class="align-items-center text-white rounded-pill bg-success bg-opacity-75 ps-4 mb-3">
  <div class="d-flex">
    <div class="toast-body">
        <p class="py-2 m-0 fs-6"><?php echo $notifiche["testo"]?></p>
    </div>
  </div>
</div>
<?php endforeach;?>
