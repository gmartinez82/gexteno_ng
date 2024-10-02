<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_oc_tipo_origen = PdeOcTipoOrigen::getOxId($id);

$estado = ($pde_oc_tipo_origen->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_oc_tipo_origen_uno.php';
?>

