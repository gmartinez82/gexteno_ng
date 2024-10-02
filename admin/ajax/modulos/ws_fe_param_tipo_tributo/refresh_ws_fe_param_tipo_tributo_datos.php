<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoTributo::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoTributo::getSesPagCantidad(), WsFeParamTipoTributo::getSesPag());
$ws_fe_param_tipo_tributos = WsFeParamTipoTributo::getWsFeParamTipoTributosDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_tributo_datos.php';
?>

