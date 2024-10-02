<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeTipoFacturaWsFeParamTipoComprobante::setSesPag($pag);

$criterio = new Criterio(PdeTipoFacturaWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeTipoFacturaWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_tipo_factura_ws_fe_param_tipo_comprobante');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeTipoFacturaWsFeParamTipoComprobante::getSesPagCantidad(), PdeTipoFacturaWsFeParamTipoComprobante::getSesPag());
$pde_tipo_factura_ws_fe_param_tipo_comprobantes = PdeTipoFacturaWsFeParamTipoComprobante::getPdeTipoFacturaWsFeParamTipoComprobantesDesdeBackend($paginador, $criterio);

include 'pde_tipo_factura_ws_fe_param_tipo_comprobante_datos.php';
?>

