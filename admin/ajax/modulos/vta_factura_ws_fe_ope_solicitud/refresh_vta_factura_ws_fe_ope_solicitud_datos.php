<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaWsFeOpeSolicitud::setSesPag($pag);

$criterio = new Criterio(VtaFacturaWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaWsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_ws_fe_ope_solicitud');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaWsFeOpeSolicitud::getSesPagCantidad(), VtaFacturaWsFeOpeSolicitud::getSesPag());
$vta_factura_ws_fe_ope_solicituds = VtaFacturaWsFeOpeSolicitud::getVtaFacturaWsFeOpeSolicitudsDesdeBackend($paginador, $criterio);

include 'vta_factura_ws_fe_ope_solicitud_datos.php';
?>

