<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboTipoPago::setSesPag($pag);

$criterio = new Criterio(PdeReciboTipoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboTipoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_tipo_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboTipoPago::getSesPagCantidad(), PdeReciboTipoPago::getSesPag());
$pde_recibo_tipo_pagos = PdeReciboTipoPago::getPdeReciboTipoPagosDesdeBackend($paginador, $criterio);

include 'pde_recibo_tipo_pago_datos.php';
?>

