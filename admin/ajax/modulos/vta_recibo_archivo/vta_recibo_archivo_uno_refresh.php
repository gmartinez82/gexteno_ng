<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'VtaRecibo';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

include "vta_recibo_archivo_uno.php";
?>
