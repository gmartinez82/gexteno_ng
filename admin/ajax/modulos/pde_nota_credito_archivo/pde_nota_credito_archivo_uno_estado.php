<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PdeNotaCredito';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

if($archivo->getEstado() == 1){
	$archivo->setEstado(0);
}else{
	$archivo->setEstado(1);
}
$archivo->save();

include "pde_nota_credito_archivo_uno.php";
?>
