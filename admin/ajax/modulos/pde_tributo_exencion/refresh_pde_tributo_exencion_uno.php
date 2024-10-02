<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_tributo_exencion = PdeTributoExencion::getOxId($id);

$estado = ($pde_tributo_exencion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_tributo_exencion_uno.php';
?>

