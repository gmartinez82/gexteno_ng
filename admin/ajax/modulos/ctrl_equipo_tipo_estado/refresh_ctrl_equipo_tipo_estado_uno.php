<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ctrl_equipo_tipo_estado = CtrlEquipoTipoEstado::getOxId($id);

$estado = ($ctrl_equipo_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ctrl_equipo_tipo_estado_uno.php';
?>

