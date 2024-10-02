<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_memo_estado = UsMemoEstado::getOxId($id);

$estado = ($us_memo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_memo_estado_uno.php';
?>

