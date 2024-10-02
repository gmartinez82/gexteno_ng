<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GeoPais::setSesPag($pag);

$criterio = new Criterio(GeoPais::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GeoPais::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('geo_pais');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GeoPais::getSesPagCantidad(), GeoPais::getSesPag());
$geo_paiss = GeoPais::getGeoPaissDesdeBackend($paginador, $criterio);

include 'geo_pais_datos.php';
?>

