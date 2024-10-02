<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gen_api_proyecto = GenApiProyecto::getOxId($id);

$estado = ($gen_api_proyecto->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gen_api_proyecto_uno.php';
?>

