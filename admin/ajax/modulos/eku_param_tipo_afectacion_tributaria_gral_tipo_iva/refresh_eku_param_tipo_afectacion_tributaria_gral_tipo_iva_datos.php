<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoAfectacionTributariaGralTipoIva::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoAfectacionTributariaGralTipoIva::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoAfectacionTributariaGralTipoIva::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_afectacion_tributaria_gral_tipo_iva');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoAfectacionTributariaGralTipoIva::getSesPagCantidad(), EkuParamTipoAfectacionTributariaGralTipoIva::getSesPag());
$eku_param_tipo_afectacion_tributaria_gral_tipo_ivas = EkuParamTipoAfectacionTributariaGralTipoIva::getEkuParamTipoAfectacionTributariaGralTipoIvasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_afectacion_tributaria_gral_tipo_iva_datos.php';
?>

