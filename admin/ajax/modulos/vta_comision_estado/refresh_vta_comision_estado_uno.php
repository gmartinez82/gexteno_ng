<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_comision_estado = VtaComisionEstado::getOxId($id);

$estado = ($vta_comision_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_comision_estado_uno.php';
?>

