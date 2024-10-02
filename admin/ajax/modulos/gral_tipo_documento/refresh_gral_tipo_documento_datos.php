<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralTipoDocumento::setSesPag($pag);

$criterio = new Criterio(GralTipoDocumento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralTipoDocumento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_tipo_documento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralTipoDocumento::getSesPagCantidad(), GralTipoDocumento::getSesPag());
$gral_tipo_documentos = GralTipoDocumento::getGralTipoDocumentosDesdeBackend($paginador, $criterio);

include 'gral_tipo_documento_datos.php';
?>

