<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PdeRecibo';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "pde_recibo_imagen_uno.php";
?>
