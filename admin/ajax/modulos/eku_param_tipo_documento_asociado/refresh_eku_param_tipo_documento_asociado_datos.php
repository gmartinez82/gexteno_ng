<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoDocumentoAsociado::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoDocumentoAsociado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoDocumentoAsociado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_documento_asociado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoDocumentoAsociado::getSesPagCantidad(), EkuParamTipoDocumentoAsociado::getSesPag());
$eku_param_tipo_documento_asociados = EkuParamTipoDocumentoAsociado::getEkuParamTipoDocumentoAsociadosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_documento_asociado_datos.php';
?>

