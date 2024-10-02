<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoMoneda::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoMoneda::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoMoneda::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_moneda');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoMoneda::getSesPagCantidad(), WsFeParamTipoMoneda::getSesPag());
$ws_fe_param_tipo_monedas = WsFeParamTipoMoneda::getWsFeParamTipoMonedasDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_moneda_datos.php';
?>

