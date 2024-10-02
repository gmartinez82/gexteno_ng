<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'SldSlider';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

if($imagen->getEstado() == 1){
	$imagen->setEstado(0);
}else{
	$imagen->setEstado(1);
}
$imagen->save();

include "sld_slider_imagen_uno.php";
?>
