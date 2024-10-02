<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ope_operario = OpeOperario::getOxId($id);

$estado = ($ope_operario->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ope_operario_uno.php';
?>

