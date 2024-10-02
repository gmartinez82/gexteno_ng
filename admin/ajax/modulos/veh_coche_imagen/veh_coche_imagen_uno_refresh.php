<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'VehCoche';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "veh_coche_imagen_uno.php";
?>
