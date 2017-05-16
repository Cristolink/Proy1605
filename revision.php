<!DOCTYPE html>
<?php

$PATH='lib/';

include $PATH.'Conexion.php';
include $PATH.'Usuario.php';


$oUsr=new Usuario();

$oUsr->nombre='nuevo';

if($oUsr->VerificaUsuario())
    echo "Existe";
else
    echo "No Existe";
/*
var_dump($_SESSION);
*/

?>