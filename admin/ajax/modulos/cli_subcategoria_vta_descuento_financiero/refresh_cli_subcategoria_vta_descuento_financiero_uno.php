<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxId($id);

$estado = ($cli_subcategoria_vta_descuento_financiero->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'cli_subcategoria_vta_descuento_financiero_uno.php';
?>

