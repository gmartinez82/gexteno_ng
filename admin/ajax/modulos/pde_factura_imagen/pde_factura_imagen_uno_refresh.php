<?php
include "_autoload.php";

$id = Gral::getVars(1, 'id');
$clase = 'PdeFactura';
$tabla = Gral::getDBTablaDesdeClase($clase);

eval('$imagen = new '.$clase.'Imagen();');
$imagen->setId($id);

include "pde_factura_imagen_uno.php";
?>
