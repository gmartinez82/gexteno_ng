<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ope_operario_us_usuario = OpeOperarioUsUsuario::getOxId($id);

$estado = ($ope_operario_us_usuario->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ope_operario_us_usuario_uno.php';
?>

