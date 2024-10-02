<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_tributo_exencion = VtaTributoExencion::getOxId($id);

$estado = ($vta_tributo_exencion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_tributo_exencion_uno.php';
?>

