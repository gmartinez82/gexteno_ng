<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaTipoFacturaWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(VtaTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaTipoFacturaWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_tipo_factura_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaTipoFacturaWsFeParamTipoComprobante::getSesPagCantidad(), VtaTipoFacturaWsFeParamTipoComprobante::getSesPag());
$vta_tipo_factura_ws_fe_param_tipo_comprobantes = VtaTipoFacturaWsFeParamTipoComprobante::getVtaTipoFacturaWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'vta_tipo_factura_ws_fe_param_tipo_comprobante_datos.php';
?>

