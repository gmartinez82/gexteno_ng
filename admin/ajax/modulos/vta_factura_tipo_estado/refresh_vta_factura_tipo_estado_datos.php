<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaFacturaTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaTipoEstado::getSesPagCantidad(), VtaFacturaTipoEstado::getSesPag());
$vta_factura_tipo_estados = VtaFacturaTipoEstado::getVtaFacturaTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_factura_tipo_estado_datos.php';
?>

