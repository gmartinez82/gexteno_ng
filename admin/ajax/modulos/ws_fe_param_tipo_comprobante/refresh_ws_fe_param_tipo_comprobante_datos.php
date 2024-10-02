<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoComprobante::getSesPagCantidad(), WsFeParamTipoComprobante::getSesPag());
$ws_fe_param_tipo_comprobantes = WsFeParamTipoComprobante::getWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_comprobante_datos.php';
?>

