<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralRutaGeoLocalidad::setSesPag($pag);

$criterio = new Criterio(GralRutaGeoLocalidad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralRutaGeoLocalidad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_ruta_geo_localidad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralRutaGeoLocalidad::getSesPagCantidad(), GralRutaGeoLocalidad::getSesPag());
$gral_ruta_geo_localidads = GralRutaGeoLocalidad::getGralRutaGeoLocalidadsDesdeBackend($paginador, $criterio);

include 'gral_ruta_geo_localidad_datos.php';
?>

