<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_oc_agrupacion_tipo_estado = PdeOcAgrupacionTipoEstado::getOxId($id);

$estado = ($pde_oc_agrupacion_tipo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_oc_agrupacion_tipo_estado_uno.php';
?>

