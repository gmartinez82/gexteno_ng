<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'OsOrdenServicio';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

if($archivo->getEstado() == 1){
	$archivo->setEstado(0);
}else{
	$archivo->setEstado(1);
}
$archivo->save();

include "os_orden_servicio_archivo_uno.php";
?>
