<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_factura_imagen = PdeFacturaImagen::getOxId($id);

$estado = ($pde_factura_imagen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_factura_imagen_uno.php';
?>

