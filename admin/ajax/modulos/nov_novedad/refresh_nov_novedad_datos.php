<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedad::setSesPag($pag);

$criterio = new Criterio(NovNovedad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedad::getSesPagCantidad(), NovNovedad::getSesPag());
$nov_novedads = NovNovedad::getNovNovedadsDesdeBackend($paginador, $criterio);

include 'nov_novedad_datos.php';
?>

