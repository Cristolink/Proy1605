<!DOCTYPE html>
<?php

$PATH='lib/';

include $PATH.'Conexion.php';
include $PATH.'Usuario.php';


$oUsr=new Usuario();

$oUsr->nombre='flopez';
$oUsr->clave='1234';
if($oUsr->VerificaUsuarioClave())
    echo "Existe";
else
    echo "No Existe";
/*
var_dump($_SESSION);
*/

?>