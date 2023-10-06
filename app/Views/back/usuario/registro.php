<!-- registro -->
<br>
<?php
// Inicializa el servicio de validación de CodeIgniter
$validation = \Config\Services::validation();
?>

<form class="row g-3 mx-auto" style="width: 90%;" method="post" action="<?php echo base_url('/enviar-form')?>">
  <?= csrf_field(); ?>
  
  <?php if (!empty(session()->getFlashdata('fail'))): ?>
    <!-- Muestra una alerta de error si existe un mensaje de "fail" en la sesión -->
    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
  <?php endif; ?>

  <?php if (!empty(session()->getFlashdata('success'))): ?>
    <!-- Muestra una alerta de éxito si existe un mensaje de "success" en la sesión -->
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
  <?php endif; ?>
</form>
