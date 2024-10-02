<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboCondicionPago::setSesPag($pag);

$criterio = new Criterio(VtaReciboCondicionPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboCondicionPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_condicion_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboCondicionPago::getSesPagCantidad(), VtaReciboCondicionPago::getSesPag());
$vta_recibo_condicion_pagos = VtaReciboCondicionPago::getVtaReciboCondicionPagosDesdeBackend($paginador, $criterio);

include 'vta_recibo_condicion_pago_datos.php';
?>

