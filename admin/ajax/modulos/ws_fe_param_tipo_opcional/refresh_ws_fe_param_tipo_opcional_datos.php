<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoOpcional::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoOpcional::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoOpcional::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_opcional');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoOpcional::getSesPagCantidad(), WsFeParamTipoOpcional::getSesPag());
$ws_fe_param_tipo_opcionals = WsFeParamTipoOpcional::getWsFeParamTipoOpcionalsDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_opcional_datos.php';
?>

