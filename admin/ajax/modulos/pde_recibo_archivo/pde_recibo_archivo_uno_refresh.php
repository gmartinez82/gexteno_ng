<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PdeRecibo';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

include "pde_recibo_archivo_uno.php";
?>
