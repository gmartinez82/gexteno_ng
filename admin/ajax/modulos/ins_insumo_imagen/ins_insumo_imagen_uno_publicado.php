<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'InsInsumo';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

if($imagen->getPublicado() == 1){
	$imagen->setPublicado(0);
}else{
	$imagen->setPublicado(1);
}
$imagen->save();

include "ins_insumo_imagen_uno.php";
?>
