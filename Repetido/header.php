<?php
function get_header($head = ''){
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>post</title>
      <link rel="stylesheet" href="style/style.css" />
    </head>
    <body>
    <header>
      <form action="agregar.php" method="POST">
        <div class="p_header">
          <div class="header">
              POST&nbspBLOG
          </div>
          <div class="header">
            <input type="text" class="buscar" name="buscar" placeholder="Buscar">
          </div>
          <div class="header">
          <input type="submit" class="btn" value="Nuevo post" />
      </form>

          </div>
        </div>
      </header>

<?php } ?>
