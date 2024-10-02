<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoDe::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoDe::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoDe::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_de');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoDe::getSesPagCantidad(), EkuParamTipoDe::getSesPag());
$eku_param_tipo_des = EkuParamTipoDe::getEkuParamTipoDesDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_de_datos.php';
?>

