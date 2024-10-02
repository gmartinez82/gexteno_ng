<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoNotaDebitoWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(PdeTipoNotaDebitoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoNotaDebitoWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_nota_debito_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoNotaDebitoWsFeParamTipoComprobante::getSesPagCantidad(), PdeTipoNotaDebitoWsFeParamTipoComprobante::getSesPag());
$pde_tipo_nota_debito_ws_fe_param_tipo_comprobantes = PdeTipoNotaDebitoWsFeParamTipoComprobante::getPdeTipoNotaDebitoWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'pde_tipo_nota_debito_ws_fe_param_tipo_comprobante_datos.php';
?>

