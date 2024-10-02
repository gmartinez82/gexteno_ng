<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'OsOrdenServicio';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "os_orden_servicio_imagen_uno.php";
?>
