<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamGeoCiudad::setSesPag($pag);

$criterio = new Criterio(EkuParamGeoCiudad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoCiudad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_geo_ciudad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamGeoCiudad::getSesPagCantidad(), EkuParamGeoCiudad::getSesPag());
$eku_param_geo_ciudads = EkuParamGeoCiudad::getEkuParamGeoCiudadsDesdeBackend($paginador, $criterio);

include 'eku_param_geo_ciudad_datos.php';
?>

