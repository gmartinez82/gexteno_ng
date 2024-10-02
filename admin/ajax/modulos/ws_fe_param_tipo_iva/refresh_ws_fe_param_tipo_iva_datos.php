<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoIva::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoIva::getSesPagCantidad(), WsFeParamTipoIva::getSesPag());
$ws_fe_param_tipo_ivas = WsFeParamTipoIva::getWsFeParamTipoIvasDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_iva_datos.php';
?>

