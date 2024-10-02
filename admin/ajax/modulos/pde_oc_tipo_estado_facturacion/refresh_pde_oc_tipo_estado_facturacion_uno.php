<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_oc_tipo_estado_facturacion = PdeOcTipoEstadoFacturacion::getOxId($id);

$estado = ($pde_oc_tipo_estado_facturacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_oc_tipo_estado_facturacion_uno.php';
?>

