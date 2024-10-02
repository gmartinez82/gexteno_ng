<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoDocumento::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoDocumento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoDocumento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_documento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoDocumento::getSesPagCantidad(), EkuParamTipoDocumento::getSesPag());
$eku_param_tipo_documentos = EkuParamTipoDocumento::getEkuParamTipoDocumentosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_documento_datos.php';
?>

