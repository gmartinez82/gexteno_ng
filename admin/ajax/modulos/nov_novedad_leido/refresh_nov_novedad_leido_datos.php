<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedadLeido::setSesPag($pag);

$criterio = new Criterio(NovNovedadLeido::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadLeido::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad_leido');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedadLeido::getSesPagCantidad(), NovNovedadLeido::getSesPag());
$nov_novedad_leidos = NovNovedadLeido::getNovNovedadLeidosDesdeBackend($paginador, $criterio);

include 'nov_novedad_leido_datos.php';
?>

