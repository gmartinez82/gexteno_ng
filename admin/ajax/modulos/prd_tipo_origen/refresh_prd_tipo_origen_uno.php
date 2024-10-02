<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_tipo_origen = PrdTipoOrigen::getOxId($id);

$estado = ($prd_tipo_origen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_tipo_origen_uno.php';
?>

