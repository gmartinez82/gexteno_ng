<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamPuntoVenta::setSesPag($pag);

$criterio = new Criterio(WsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamPuntoVenta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_punto_venta');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamPuntoVenta::getSesPagCantidad(), WsFeParamPuntoVenta::getSesPag());
$ws_fe_param_punto_ventas = WsFeParamPuntoVenta::getWsFeParamPuntoVentasDesdeBackend($paginador, $criterio);

include 'ws_fe_param_punto_venta_datos.php';
?>

