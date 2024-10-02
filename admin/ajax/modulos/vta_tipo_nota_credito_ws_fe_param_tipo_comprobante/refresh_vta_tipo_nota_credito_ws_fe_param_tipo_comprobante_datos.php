<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoNotaCreditoWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(VtaTipoNotaCreditoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoNotaCreditoWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoNotaCreditoWsFeParamTipoComprobante::getSesPagCantidad(), VtaTipoNotaCreditoWsFeParamTipoComprobante::getSesPag());
$vta_tipo_nota_credito_ws_fe_param_tipo_comprobantes = VtaTipoNotaCreditoWsFeParamTipoComprobante::getVtaTipoNotaCreditoWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_datos.php';
?>

