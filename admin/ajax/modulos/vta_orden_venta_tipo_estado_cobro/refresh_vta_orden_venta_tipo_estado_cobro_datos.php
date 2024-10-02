<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaTipoEstadoCobro::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaTipoEstadoCobro::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaTipoEstadoCobro::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_tipo_estado_cobro');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaTipoEstadoCobro::getSesPagCantidad(), VtaOrdenVentaTipoEstadoCobro::getSesPag());
$vta_orden_venta_tipo_estado_cobros = VtaOrdenVentaTipoEstadoCobro::getVtaOrdenVentaTipoEstadoCobrosDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_tipo_estado_cobro_datos.php';
?>

