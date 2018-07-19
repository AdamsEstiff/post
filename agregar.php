<?php
include "Repetido/footer.php";
include "Repetido/header.php";
include_once "clases/FlashMessage.php";
include_once "clases/helpers.php";
get_header();
$flashMessage = new FlashMessage();
 ?>
<div>
  <form action="clases/validaciones.php" method="post">
    <div class="abuelo">
      <div class="padre">
        <div class="hijo">
          <p class="title">
            Agregar Nueva Publicacion
          </p>
        </div>
        <div class="hijo">
          <input type="text" class="titulo" name="titulo" value="<?= $flashMessage->getInput('title'); ?>" placeholder="Titulo.." required>
        </div>
        <div class="hijo">
          <textarea name="contenido" <?= $flashMessage->getInput('content'); ?> placeholder="Escribe aquí tus comentarios" rows="20" cols="70" style="margin-top:2%; width: 100%;"required></textarea>
          <div class="btn-div">
            <input type="submit" class="btn" name="btn" value=" Publicar">
          </div>
        </div>
      </div>
    </div>

  </form>
  <?php if ($flashMessage->hasErrors() || $flashMessage->hasMessage()): ?>
<div class="alert danger">
  <?php if ($flashMessage->hasMessage()): ?>
  <p><?= $flashMessage->getMessage() ?></p>
  <?php endif; ?>

  <?php if ($flashMessage->hasErrors()): ?>
    <ul>
      <?php foreach ($flashMessage->all() as $error): ?>
        <li><?= $error[0] ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
<?php endif; ?>

<?php if ($flashMessage->hasSuccessMessage()): ?>
<div class="alert success">
  <?= $flashMessage->getSuccessMessage() ?>
</div>
<?php endif; ?>
</div>
 <?php
get_footer();
  ?>
