<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$conf_variable = ConfVariable::getOxId($id);

$estado = ($conf_variable->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'conf_variable_uno.php';
?>

