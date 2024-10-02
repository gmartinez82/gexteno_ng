<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaTipoEstadoRemision::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaTipoEstadoRemision::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaTipoEstadoRemision::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_tipo_estado_remision');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaTipoEstadoRemision::getSesPagCantidad(), VtaOrdenVentaTipoEstadoRemision::getSesPag());
$vta_orden_venta_tipo_estado_remisions = VtaOrdenVentaTipoEstadoRemision::getVtaOrdenVentaTipoEstadoRemisionsDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_tipo_estado_remision_datos.php';
?>

