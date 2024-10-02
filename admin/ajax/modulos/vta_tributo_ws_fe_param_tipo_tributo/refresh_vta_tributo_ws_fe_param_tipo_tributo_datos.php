<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTributoWsFeParamTipoTributo::setSesPag($pag);

$criterio = new Criterio(VtaTributoWsFeParamTipoTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTributoWsFeParamTipoTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tributo_ws_fe_param_tipo_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTributoWsFeParamTipoTributo::getSesPagCantidad(), VtaTributoWsFeParamTipoTributo::getSesPag());
$vta_tributo_ws_fe_param_tipo_tributos = VtaTributoWsFeParamTipoTributo::getVtaTributoWsFeParamTipoTributosDesdeBackend($paginador, $criterio);

include 'vta_tributo_ws_fe_param_tipo_tributo_datos.php';
?>

