<!DOCTYPE html>
<?php
 /*$_SESSION["saludo"]="Hola Mundo"; */

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <a href="revision.php">Revisi&oacute;n sesi&oacute;n</a>
         <?php
         echo md5('Hola Mundo');
         ?>
          
          <form>
              Stando Masteru
              <input type="text" name="nombre"><br>
              Stando passwordu
              <input type="password" name="clave">
              
              
          </form>
    </body>
</html>
