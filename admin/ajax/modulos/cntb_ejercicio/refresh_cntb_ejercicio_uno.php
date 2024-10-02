<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cntb_ejercicio = CntbEjercicio::getOxId($id);

$estado = ($cntb_ejercicio->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cntb_ejercicio_uno.php';
?>

