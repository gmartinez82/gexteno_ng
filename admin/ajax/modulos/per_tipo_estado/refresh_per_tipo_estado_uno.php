<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$per_tipo_estado = PerTipoEstado::getOxId($id);

$estado = ($per_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'per_tipo_estado_uno.php';
?>

