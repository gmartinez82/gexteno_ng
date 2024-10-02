<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_centro_recepcion_us_usuario = PdeCentroRecepcionUsUsuario::getOxId($id);

include 'pde_centro_recepcion_us_usuario_uno.php';
?>

