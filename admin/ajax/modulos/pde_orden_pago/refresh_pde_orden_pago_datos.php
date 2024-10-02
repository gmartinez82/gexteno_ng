<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPago::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPago::getSesPagCantidad(), PdeOrdenPago::getSesPag());
$pde_orden_pagos = PdeOrdenPago::getPdeOrdenPagosDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_datos.php';
?>

