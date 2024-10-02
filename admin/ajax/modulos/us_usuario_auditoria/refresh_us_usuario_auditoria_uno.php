<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_usuario_auditoria = UsUsuarioAuditoria::getOxId($id);

$estado = ($us_usuario_auditoria->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_usuario_auditoria_uno.php';
?>

