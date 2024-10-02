<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcionAgrupacion::setSesPag($pag);

$criterio = new Criterio(PdeRecepcionAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcionAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcionAgrupacion::getSesPagCantidad(), PdeRecepcionAgrupacion::getSesPag());
$pde_recepcion_agrupacions = PdeRecepcionAgrupacion::getPdeRecepcionAgrupacionsDesdeBackend($paginador, $criterio);

include 'pde_recepcion_agrupacion_datos.php';
?>

