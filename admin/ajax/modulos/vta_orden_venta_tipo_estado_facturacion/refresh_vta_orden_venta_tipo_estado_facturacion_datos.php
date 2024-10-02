<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaTipoEstadoFacturacion::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaTipoEstadoFacturacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaTipoEstadoFacturacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_tipo_estado_facturacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaTipoEstadoFacturacion::getSesPagCantidad(), VtaOrdenVentaTipoEstadoFacturacion::getSesPag());
$vta_orden_venta_tipo_estado_facturacions = VtaOrdenVentaTipoEstadoFacturacion::getVtaOrdenVentaTipoEstadoFacturacionsDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_tipo_estado_facturacion_datos.php';
?>

