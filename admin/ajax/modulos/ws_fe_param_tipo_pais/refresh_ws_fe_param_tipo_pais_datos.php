<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoPais::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoPais::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoPais::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_pais');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoPais::getSesPagCantidad(), WsFeParamTipoPais::getSesPag());
$ws_fe_param_tipo_paiss = WsFeParamTipoPais::getWsFeParamTipoPaissDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_pais_datos.php';
?>

