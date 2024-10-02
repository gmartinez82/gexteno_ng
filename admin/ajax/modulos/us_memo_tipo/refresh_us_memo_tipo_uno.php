<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_memo_tipo = UsMemoTipo::getOxId($id);

$estado = ($us_memo_tipo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_memo_tipo_uno.php';
?>

