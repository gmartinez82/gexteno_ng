<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($id);

$estado = ($per_persona_gral_sucursal->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'per_persona_gral_sucursal_uno.php';
?>

