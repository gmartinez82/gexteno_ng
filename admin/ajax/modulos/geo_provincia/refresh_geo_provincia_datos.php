<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GeoProvincia::setSesPag($pag);

$criterio = new Criterio(GeoProvincia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GeoProvincia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('geo_provincia');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GeoProvincia::getSesPagCantidad(), GeoProvincia::getSesPag());
$geo_provincias = GeoProvincia::getGeoProvinciasDesdeBackend($paginador, $criterio);

include 'geo_provincia_datos.php';
?>

