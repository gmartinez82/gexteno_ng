<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GeoLocalidad::setSesPag($pag);

$criterio = new Criterio(GeoLocalidad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GeoLocalidad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('geo_localidad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GeoLocalidad::getSesPagCantidad(), GeoLocalidad::getSesPag());
$geo_localidads = GeoLocalidad::getGeoLocalidadsDesdeBackend($paginador, $criterio);

include 'geo_localidad_datos.php';
?>

