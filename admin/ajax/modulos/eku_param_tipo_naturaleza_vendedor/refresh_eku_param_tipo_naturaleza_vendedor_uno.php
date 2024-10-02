<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_tipo_naturaleza_vendedor = EkuParamTipoNaturalezaVendedor::getOxId($id);

$estado = ($eku_param_tipo_naturaleza_vendedor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_param_tipo_naturaleza_vendedor_uno.php';
?>

