<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralTipoDocumentoWsFeParamTipoDocumento::setSesPag($pag);

$criterio = new Criterio(GralTipoDocumentoWsFeParamTipoDocumento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralTipoDocumentoWsFeParamTipoDocumento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_tipo_documento_ws_fe_param_tipo_documento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralTipoDocumentoWsFeParamTipoDocumento::getSesPagCantidad(), GralTipoDocumentoWsFeParamTipoDocumento::getSesPag());
$gral_tipo_documento_ws_fe_param_tipo_documentos = GralTipoDocumentoWsFeParamTipoDocumento::getGralTipoDocumentoWsFeParamTipoDocumentosDesdeBackend($paginador, $criterio);

include 'gral_tipo_documento_ws_fe_param_tipo_documento_datos.php';
?>

