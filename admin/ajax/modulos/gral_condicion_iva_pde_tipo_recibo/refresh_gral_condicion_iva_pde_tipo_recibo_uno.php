<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_condicion_iva_pde_tipo_recibo = GralCondicionIvaPdeTipoRecibo::getOxId($id);

$estado = ($gral_condicion_iva_pde_tipo_recibo->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_condicion_iva_pde_tipo_recibo_uno.php';
?>

