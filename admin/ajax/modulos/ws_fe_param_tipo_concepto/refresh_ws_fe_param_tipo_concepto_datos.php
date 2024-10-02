<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoConcepto::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoConcepto::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoConcepto::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_concepto');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoConcepto::getSesPagCantidad(), WsFeParamTipoConcepto::getSesPag());
$ws_fe_param_tipo_conceptos = WsFeParamTipoConcepto::getWsFeParamTipoConceptosDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_concepto_datos.php';
?>

