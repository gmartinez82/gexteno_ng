<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pln_jornada_us_usuario = PlnJornadaUsUsuario::getOxId($id);

include 'pln_jornada_us_usuario_uno.php';
?>

