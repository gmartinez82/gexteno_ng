<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeOrdenPagoGralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(PdeOrdenPagoGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOrdenPagoGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_orden_pago_gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeOrdenPagoGralFpFormaPago::getSesPagCantidad(), PdeOrdenPagoGralFpFormaPago::getSesPag());
$pde_orden_pago_gral_fp_forma_pagos = PdeOrdenPagoGralFpFormaPago::getPdeOrdenPagoGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'pde_orden_pago_gral_fp_forma_pago_datos.php';
?>

