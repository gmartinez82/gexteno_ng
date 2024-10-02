<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_cliente_gral_fp_agrupacion = CliClienteGralFpAgrupacion::getOxId($id);

$estado = ($cli_cliente_gral_fp_agrupacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_cliente_gral_fp_agrupacion_uno.php';
?>

