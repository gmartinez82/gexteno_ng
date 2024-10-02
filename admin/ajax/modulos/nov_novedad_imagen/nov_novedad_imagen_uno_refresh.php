<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'NovNovedad';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "nov_novedad_imagen_uno.php";
?>
