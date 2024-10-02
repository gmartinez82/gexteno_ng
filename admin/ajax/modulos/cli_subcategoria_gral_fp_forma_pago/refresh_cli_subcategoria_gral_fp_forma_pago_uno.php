<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_subcategoria_gral_fp_forma_pago = CliSubcategoriaGralFpFormaPago::getOxId($id);

$estado = ($cli_subcategoria_gral_fp_forma_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_subcategoria_gral_fp_forma_pago_uno.php';
?>

