<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'InsMarca';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);
$imagen->deleteFile();

Gral::_echo("Se elimino correctamente: <b>".$imagen->getDescripcion()."</b>")
?>
