<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPuntoVentaWsFeParamPuntoVenta::setSesPag($pag);

$criterio = new Criterio(VtaPuntoVentaWsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPuntoVentaWsFeParamPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_punto_venta_ws_fe_param_punto_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPuntoVentaWsFeParamPuntoVenta::getSesPagCantidad(), VtaPuntoVentaWsFeParamPuntoVenta::getSesPag());
$vta_punto_venta_ws_fe_param_punto_ventas = VtaPuntoVentaWsFeParamPuntoVenta::getVtaPuntoVentaWsFeParamPuntoVentasDesdeBackend($paginador, $criterio);

include 'vta_punto_venta_ws_fe_param_punto_venta_datos.php';
?>

