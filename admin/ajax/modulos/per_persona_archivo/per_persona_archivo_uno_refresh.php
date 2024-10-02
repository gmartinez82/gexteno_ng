<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PerPersona';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);

include "per_persona_archivo_uno.php";
?>
