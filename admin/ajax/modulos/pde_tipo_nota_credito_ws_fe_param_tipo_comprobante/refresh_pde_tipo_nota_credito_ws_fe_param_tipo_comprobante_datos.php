<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoNotaCreditoWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(PdeTipoNotaCreditoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoNotaCreditoWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_nota_credito_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoNotaCreditoWsFeParamTipoComprobante::getSesPagCantidad(), PdeTipoNotaCreditoWsFeParamTipoComprobante::getSesPag());
$pde_tipo_nota_credito_ws_fe_param_tipo_comprobantes = PdeTipoNotaCreditoWsFeParamTipoComprobante::getPdeTipoNotaCreditoWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_datos.php';
?>

