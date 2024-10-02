<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PerPersona';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$archivo = new '.$clase.'Archivo();');
$archivo->setId($id);
$archivo->deleteFile();

Gral::_echo("Se elimino correctamente: <b>".$archivo->getDescripcion()."</b>")
?>
