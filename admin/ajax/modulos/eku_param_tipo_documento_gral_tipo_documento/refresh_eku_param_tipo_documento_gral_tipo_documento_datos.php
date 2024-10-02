<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoDocumentoGralTipoDocumento::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoDocumentoGralTipoDocumento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoDocumentoGralTipoDocumento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_documento_gral_tipo_documento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoDocumentoGralTipoDocumento::getSesPagCantidad(), EkuParamTipoDocumentoGralTipoDocumento::getSesPag());
$eku_param_tipo_documento_gral_tipo_documentos = EkuParamTipoDocumentoGralTipoDocumento::getEkuParamTipoDocumentoGralTipoDocumentosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_documento_gral_tipo_documento_datos.php';
?>

