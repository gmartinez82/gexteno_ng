<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoTolerancia::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoTolerancia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoTolerancia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_tolerancia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoTolerancia::getSesPagCantidad(), EkuParamTipoTolerancia::getSesPag());
$eku_param_tipo_tolerancias = EkuParamTipoTolerancia::getEkuParamTipoToleranciasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_tolerancia_datos.php';
?>

