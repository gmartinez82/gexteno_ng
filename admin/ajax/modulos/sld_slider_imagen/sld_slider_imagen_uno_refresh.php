<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'SldSlider';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "sld_slider_imagen_uno.php";
?>
