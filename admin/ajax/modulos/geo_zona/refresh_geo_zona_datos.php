<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GeoZona::setSesPag($pag);

$criterio = new Criterio(GeoZona::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GeoZona::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('geo_zona');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GeoZona::getSesPagCantidad(), GeoZona::getSesPag());
$geo_zonas = GeoZona::getGeoZonasDesdeBackend($paginador, $criterio);

include 'geo_zona_datos.php';
?>

