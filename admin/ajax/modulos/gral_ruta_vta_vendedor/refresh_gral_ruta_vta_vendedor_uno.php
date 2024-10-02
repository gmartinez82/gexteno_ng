<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_ruta_vta_vendedor = GralRutaVtaVendedor::getOxId($id);

$estado = ($gral_ruta_vta_vendedor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_ruta_vta_vendedor_uno.php';
?>

