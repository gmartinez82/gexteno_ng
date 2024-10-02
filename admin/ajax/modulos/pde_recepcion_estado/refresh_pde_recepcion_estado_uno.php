<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_recepcion_estado = PdeRecepcionEstado::getOxId($id);

include 'pde_recepcion_estado_uno.php';
?>

