<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pdi_tipo_estado = PdiTipoEstado::getOxId($id);

$estado = ($pdi_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pdi_tipo_estado_uno.php';
?>

