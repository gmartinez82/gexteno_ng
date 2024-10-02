<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamCaracteristicasCarga::setSesPag($pag);

$criterio = new Criterio(EkuParamCaracteristicasCarga::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamCaracteristicasCarga::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_caracteristicas_carga');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamCaracteristicasCarga::getSesPagCantidad(), EkuParamCaracteristicasCarga::getSesPag());
$eku_param_caracteristicas_cargas = EkuParamCaracteristicasCarga::getEkuParamCaracteristicasCargasDesdeBackend($paginador, $criterio);

include 'eku_param_caracteristicas_carga_datos.php';
?>

