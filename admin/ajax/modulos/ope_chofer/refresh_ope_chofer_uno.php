<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ope_chofer = OpeChofer::getOxId($id);

$estado = ($ope_chofer->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ope_chofer_uno.php';
?>

