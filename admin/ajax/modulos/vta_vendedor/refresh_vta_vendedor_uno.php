<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_vendedor = VtaVendedor::getOxId($id);

$estado = ($vta_vendedor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_vendedor_uno.php';
?>

