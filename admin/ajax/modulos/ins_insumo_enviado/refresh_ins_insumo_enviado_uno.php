<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$ins_insumo_enviado = InsInsumoEnviado::getOxId($id);

$estado = ($ins_insumo_enviado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'ins_insumo_enviado_uno.php';
?>

