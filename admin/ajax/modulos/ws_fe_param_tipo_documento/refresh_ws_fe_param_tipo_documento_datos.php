<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
WsFeParamTipoDocumento::setSesPag($pag);

$criterio = new Criterio(WsFeParamTipoDocumento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
WsFeParamTipoDocumento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('ws_fe_param_tipo_documento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(WsFeParamTipoDocumento::getSesPagCantidad(), WsFeParamTipoDocumento::getSesPag());
$ws_fe_param_tipo_documentos = WsFeParamTipoDocumento::getWsFeParamTipoDocumentosDesdeBackend($paginador, $criterio);

include 'ws_fe_param_tipo_documento_datos.php';
?>

