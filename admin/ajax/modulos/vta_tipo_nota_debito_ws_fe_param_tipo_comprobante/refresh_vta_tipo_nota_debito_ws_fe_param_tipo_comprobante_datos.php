<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoNotaDebitoWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(VtaTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoNotaDebitoWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_nota_debito_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoNotaDebitoWsFeParamTipoComprobante::getSesPagCantidad(), VtaTipoNotaDebitoWsFeParamTipoComprobante::getSesPag());
$vta_tipo_nota_debito_ws_fe_param_tipo_comprobantes = VtaTipoNotaDebitoWsFeParamTipoComprobante::getVtaTipoNotaDebitoWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_datos.php';
?>

