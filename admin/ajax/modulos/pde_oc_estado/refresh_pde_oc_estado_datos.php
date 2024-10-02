<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOcEstado::setSesPag($pag);

$criterio = new Criterio(PdeOcEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_oc_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOcEstado::getSesPagCantidad(), PdeOcEstado::getSesPag());
$pde_oc_estados = PdeOcEstado::getPdeOcEstadosDesdeBackend($paginador, $criterio);

include 'pde_oc_estado_datos.php';
?>

