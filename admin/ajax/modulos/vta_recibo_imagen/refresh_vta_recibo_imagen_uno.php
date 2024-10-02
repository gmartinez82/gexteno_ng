<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_recibo_imagen = VtaReciboImagen::getOxId($id);

$estado = ($vta_recibo_imagen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_recibo_imagen_uno.php';
?>

