<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaReciboTipoPago::setSesPag($pag);

$criterio = new Criterio(VtaReciboTipoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaReciboTipoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_recibo_tipo_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaReciboTipoPago::getSesPagCantidad(), VtaReciboTipoPago::getSesPag());
$vta_recibo_tipo_pagos = VtaReciboTipoPago::getVtaReciboTipoPagosDesdeBackend($paginador, $criterio);

include 'vta_recibo_tipo_pago_datos.php';
?>

