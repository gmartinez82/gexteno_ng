<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'OsOrdenServicio';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

include "os_orden_servicio_archivo_uno.php";
?>
