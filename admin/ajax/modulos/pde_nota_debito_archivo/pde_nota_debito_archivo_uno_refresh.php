<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PdeNotaDebito';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

include "pde_nota_debito_archivo_uno.php";
?>
