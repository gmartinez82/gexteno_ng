<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
NovNovedadObservado::setSesPag($pag);

$criterio = new Criterio(NovNovedadObservado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NovNovedadObservado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('nov_novedad_observado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(NovNovedadObservado::getSesPagCantidad(), NovNovedadObservado::getSesPag());
$nov_novedad_observados = NovNovedadObservado::getNovNovedadObservadosDesdeBackend($paginador, $criterio);

include 'nov_novedad_observado_datos.php';
?>

