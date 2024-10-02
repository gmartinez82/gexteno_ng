<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'NovNovedad';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

include "nov_novedad_archivo_uno.php";
?>
