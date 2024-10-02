<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoAfectacionTributaria::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoAfectacionTributaria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoAfectacionTributaria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_afectacion_tributaria');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoAfectacionTributaria::getSesPagCantidad(), EkuParamTipoAfectacionTributaria::getSesPag());
$eku_param_tipo_afectacion_tributarias = EkuParamTipoAfectacionTributaria::getEkuParamTipoAfectacionTributariasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_afectacion_tributaria_datos.php';
?>

