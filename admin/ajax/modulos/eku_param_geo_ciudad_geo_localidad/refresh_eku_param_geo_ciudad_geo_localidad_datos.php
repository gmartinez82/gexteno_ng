<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamGeoCiudadGeoLocalidad::setSesPag($pag);

$criterio = new Criterio(EkuParamGeoCiudadGeoLocalidad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamGeoCiudadGeoLocalidad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_geo_ciudad_geo_localidad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamGeoCiudadGeoLocalidad::getSesPagCantidad(), EkuParamGeoCiudadGeoLocalidad::getSesPag());
$eku_param_geo_ciudad_geo_localidads = EkuParamGeoCiudadGeoLocalidad::getEkuParamGeoCiudadGeoLocalidadsDesdeBackend($paginador, $criterio);

include 'eku_param_geo_ciudad_geo_localidad_datos.php';
?>

