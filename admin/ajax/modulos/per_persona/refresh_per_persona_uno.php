<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$per_persona = PerPersona::getOxId($id);

$estado = ($per_persona->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'per_persona_uno.php';
?>

