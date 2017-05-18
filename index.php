<!DOCTYPE html>
<?php
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <a href="revision.php">Revisi&oacute;n sesi&oacute;n</a>
     
          <?php if (isset($_SESSION['USR'])){ ?>
          <form action="revision.php" method="POST">
              <input type="text" name="nombre"/>
              <input type="paswword" name="clave"/>
              <input type="submit" value="Acceder">
          </form>
          <?php }?>
    </body>
</html>
