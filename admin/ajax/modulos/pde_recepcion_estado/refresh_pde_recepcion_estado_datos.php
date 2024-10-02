<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeRecepcionEstado::setSesPag($pag);

$criterio = new Criterio(PdeRecepcionEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcionEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recepcion_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeRecepcionEstado::getSesPagCantidad(), PdeRecepcionEstado::getSesPag());
$pde_recepcion_estados = PdeRecepcionEstado::getPdeRecepcionEstadosDesdeBackend($paginador, $criterio);

include 'pde_recepcion_estado_datos.php';
?>

