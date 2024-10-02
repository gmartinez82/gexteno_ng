<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$alt_alerta_us_usuario = AltAlertaUsUsuario::getOxId($id);

include 'alt_alerta_us_usuario_uno.php';
?>

