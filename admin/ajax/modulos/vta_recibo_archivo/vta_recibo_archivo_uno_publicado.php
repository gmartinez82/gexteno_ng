<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'VtaRecibo';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

if($archivo->getPublicado() == 1){
	$archivo->setPublicado(0);
}else{
	$archivo->setPublicado(1);
}
$archivo->save();

include "vta_recibo_archivo_uno.php";
?>
