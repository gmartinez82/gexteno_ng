<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_tipo_recibo = PdeTipoRecibo::getOxId($id);

$estado = ($pde_tipo_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_tipo_recibo_uno.php';
?>

