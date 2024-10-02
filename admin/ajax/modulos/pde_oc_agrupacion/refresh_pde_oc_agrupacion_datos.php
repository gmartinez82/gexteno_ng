<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcAgrupacion::setSesPag($pag);

$criterio = new Criterio(PdeOcAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcAgrupacion::getSesPagCantidad(), PdeOcAgrupacion::getSesPag());
$pde_oc_agrupacions = PdeOcAgrupacion::getPdeOcAgrupacionsDesdeBackend($paginador, $criterio);

include 'pde_oc_agrupacion_datos.php';
?>

