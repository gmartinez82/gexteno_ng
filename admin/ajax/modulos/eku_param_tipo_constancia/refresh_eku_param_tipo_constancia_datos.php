<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoConstancia::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoConstancia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoConstancia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_constancia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoConstancia::getSesPagCantidad(), EkuParamTipoConstancia::getSesPag());
$eku_param_tipo_constancias = EkuParamTipoConstancia::getEkuParamTipoConstanciasDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_constancia_datos.php';
?>

