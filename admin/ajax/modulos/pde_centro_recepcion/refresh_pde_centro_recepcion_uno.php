<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_centro_recepcion = PdeCentroRecepcion::getOxId($id);

$estado = ($pde_centro_recepcion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_centro_recepcion_uno.php';
?>

