<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralRutaGeoLocalidadCliCentroRecepcion::setSesPag($pag);

$criterio = new Criterio(GralRutaGeoLocalidadCliCentroRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralRutaGeoLocalidadCliCentroRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_ruta_geo_localidad_cli_centro_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralRutaGeoLocalidadCliCentroRecepcion::getSesPagCantidad(), GralRutaGeoLocalidadCliCentroRecepcion::getSesPag());
$gral_ruta_geo_localidad_cli_centro_recepcions = GralRutaGeoLocalidadCliCentroRecepcion::getGralRutaGeoLocalidadCliCentroRecepcionsDesdeBackend($paginador, $criterio);

include 'gral_ruta_geo_localidad_cli_centro_recepcion_datos.php';
?>

