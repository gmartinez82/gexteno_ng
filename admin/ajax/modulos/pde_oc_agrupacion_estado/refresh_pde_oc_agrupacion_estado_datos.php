<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcAgrupacionEstado::setSesPag($pag);

$criterio = new Criterio(PdeOcAgrupacionEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcAgrupacionEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_agrupacion_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcAgrupacionEstado::getSesPagCantidad(), PdeOcAgrupacionEstado::getSesPag());
$pde_oc_agrupacion_estados = PdeOcAgrupacionEstado::getPdeOcAgrupacionEstadosDesdeBackend($paginador, $criterio);

include 'pde_oc_agrupacion_estado_datos.php';
?>

