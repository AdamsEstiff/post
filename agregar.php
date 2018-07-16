<?php
include "Repetido/footer.php";
include "Repetido/header.php";
get_header();
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
          <input type="text" class="titulo" name="titulo" placeholder="Titulo">
        </div>
        <div class="hijo">
          <textarea name="contenido" placeholder="Escribe aquí tus comentarios" rows="20" cols="70" style="margin-top:2%; width: 100%;"></textarea>
          <div class="btn-div">
            <input type="submit" class="btn" name="btn" value=" Publicar">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
 <?php
get_footer();
  ?>
