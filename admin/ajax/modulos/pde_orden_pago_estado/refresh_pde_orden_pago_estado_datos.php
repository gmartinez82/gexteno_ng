<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoEstado::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoEstado::getSesPagCantidad(), PdeOrdenPagoEstado::getSesPag());
$pde_orden_pago_estados = PdeOrdenPagoEstado::getPdeOrdenPagoEstadosDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_estado_datos.php';
?>

