<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcAgrupacionTipoEstado::setSesPag($pag);

$criterio = new Criterio(PdeOcAgrupacionTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcAgrupacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_agrupacion_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcAgrupacionTipoEstado::getSesPagCantidad(), PdeOcAgrupacionTipoEstado::getSesPag());
$pde_oc_agrupacion_tipo_estados = PdeOcAgrupacionTipoEstado::getPdeOcAgrupacionTipoEstadosDesdeBackend($paginador, $criterio);

include 'pde_oc_agrupacion_tipo_estado_datos.php';
?>

