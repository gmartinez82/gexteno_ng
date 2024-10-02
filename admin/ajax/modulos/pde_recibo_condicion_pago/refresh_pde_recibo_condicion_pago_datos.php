<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeReciboCondicionPago::setSesPag($pag);

$criterio = new Criterio(PdeReciboCondicionPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeReciboCondicionPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_recibo_condicion_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeReciboCondicionPago::getSesPagCantidad(), PdeReciboCondicionPago::getSesPag());
$pde_recibo_condicion_pagos = PdeReciboCondicionPago::getPdeReciboCondicionPagosDesdeBackend($paginador, $criterio);

include 'pde_recibo_condicion_pago_datos.php';
?>

