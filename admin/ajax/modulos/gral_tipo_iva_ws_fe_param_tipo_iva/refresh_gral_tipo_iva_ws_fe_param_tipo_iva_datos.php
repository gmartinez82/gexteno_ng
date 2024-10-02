<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralTipoIvaWsFeParamTipoIva::setSesPag($pag);

$criterio = new Criterio(GralTipoIvaWsFeParamTipoIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralTipoIvaWsFeParamTipoIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_tipo_iva_ws_fe_param_tipo_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralTipoIvaWsFeParamTipoIva::getSesPagCantidad(), GralTipoIvaWsFeParamTipoIva::getSesPag());
$gral_tipo_iva_ws_fe_param_tipo_ivas = GralTipoIvaWsFeParamTipoIva::getGralTipoIvaWsFeParamTipoIvasDesdeBackend($paginador, $criterio);

include 'gral_tipo_iva_ws_fe_param_tipo_iva_datos.php';
?>

