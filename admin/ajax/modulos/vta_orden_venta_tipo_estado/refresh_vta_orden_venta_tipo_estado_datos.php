<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaOrdenVentaTipoEstado::setSesPag($pag);

$criterio = new Criterio(VtaOrdenVentaTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaOrdenVentaTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_orden_venta_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaOrdenVentaTipoEstado::getSesPagCantidad(), VtaOrdenVentaTipoEstado::getSesPag());
$vta_orden_venta_tipo_estados = VtaOrdenVentaTipoEstado::getVtaOrdenVentaTipoEstadosDesdeBackend($paginador, $criterio);

include 'vta_orden_venta_tipo_estado_datos.php';
?>

