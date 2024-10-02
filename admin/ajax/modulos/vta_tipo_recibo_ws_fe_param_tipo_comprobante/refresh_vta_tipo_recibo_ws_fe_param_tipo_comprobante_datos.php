<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoReciboWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(VtaTipoReciboWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoReciboWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_recibo_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoReciboWsFeParamTipoComprobante::getSesPagCantidad(), VtaTipoReciboWsFeParamTipoComprobante::getSesPag());
$vta_tipo_recibo_ws_fe_param_tipo_comprobantes = VtaTipoReciboWsFeParamTipoComprobante::getVtaTipoReciboWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'vta_tipo_recibo_ws_fe_param_tipo_comprobante_datos.php';
?>

