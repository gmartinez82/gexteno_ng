<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoDocumentoImpreso::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoDocumentoImpreso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoDocumentoImpreso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_documento_impreso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoDocumentoImpreso::getSesPagCantidad(), EkuParamTipoDocumentoImpreso::getSesPag());
$eku_param_tipo_documento_impresos = EkuParamTipoDocumentoImpreso::getEkuParamTipoDocumentoImpresosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_documento_impreso_datos.php';
?>

