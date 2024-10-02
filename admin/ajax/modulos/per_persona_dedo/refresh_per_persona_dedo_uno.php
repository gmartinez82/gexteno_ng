<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$per_persona_dedo = PerPersonaDedo::getOxId($id);

$estado = ($per_persona_dedo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'per_persona_dedo_uno.php';
?>

