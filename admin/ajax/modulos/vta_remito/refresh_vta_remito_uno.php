<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_remito = VtaRemito::getOxId($id);

$estado = ($vta_remito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_remito_uno.php';
?>

