<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamMoneda::setSesPag($pag);

$criterio = new Criterio(EkuParamMoneda::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamMoneda::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_moneda');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamMoneda::getSesPagCantidad(), EkuParamMoneda::getSesPag());
$eku_param_monedas = EkuParamMoneda::getEkuParamMonedasDesdeBackend($paginador, $criterio);

include 'eku_param_moneda_datos.php';
?>

