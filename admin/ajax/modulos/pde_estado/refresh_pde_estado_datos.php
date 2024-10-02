<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeEstado::setSesPag($pag);

$criterio = new Criterio(PdeEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeEstado::getSesPagCantidad(), PdeEstado::getSesPag());
$pde_estados = PdeEstado::getPdeEstadosDesdeBackend($paginador, $criterio);

include 'pde_estado_datos.php';
?>

