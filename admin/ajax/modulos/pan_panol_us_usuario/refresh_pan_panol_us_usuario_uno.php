<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pan_panol_us_usuario = PanPanolUsUsuario::getOxId($id);

include 'pan_panol_us_usuario_uno.php';
?>

