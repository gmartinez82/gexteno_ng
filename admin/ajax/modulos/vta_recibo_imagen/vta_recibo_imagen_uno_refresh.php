<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'VtaRecibo';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "vta_recibo_imagen_uno.php";
?>
