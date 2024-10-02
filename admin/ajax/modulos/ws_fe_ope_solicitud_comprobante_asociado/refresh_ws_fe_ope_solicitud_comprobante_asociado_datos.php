<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeOpeSolicitudComprobanteAsociado::setSesPag($pag);

$criterio = new Criterio(WsFeOpeSolicitudComprobanteAsociado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudComprobanteAsociado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_ope_solicitud_comprobante_asociado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeOpeSolicitudComprobanteAsociado::getSesPagCantidad(), WsFeOpeSolicitudComprobanteAsociado::getSesPag());
$ws_fe_ope_solicitud_comprobante_asociados = WsFeOpeSolicitudComprobanteAsociado::getWsFeOpeSolicitudComprobanteAsociadosDesdeBackend($paginador, $criterio);

include 'ws_fe_ope_solicitud_comprobante_asociado_datos.php';
?>

