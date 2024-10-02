<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_condicion_iva_vta_tipo_nota_credito = GralCondicionIvaVtaTipoNotaCredito::getOxId($id);

$estado = ($gral_condicion_iva_vta_tipo_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_condicion_iva_vta_tipo_nota_credito_uno.php';
?>

