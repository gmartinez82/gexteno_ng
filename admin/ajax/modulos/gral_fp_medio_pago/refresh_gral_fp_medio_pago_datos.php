<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralFpMedioPago::setSesPag($pag);

$criterio = new Criterio(GralFpMedioPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFpMedioPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_fp_medio_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralFpMedioPago::getSesPagCantidad(), GralFpMedioPago::getSesPag());
$gral_fp_medio_pagos = GralFpMedioPago::getGralFpMedioPagosDesdeBackend($paginador, $criterio);

include 'gral_fp_medio_pago_datos.php';
?>

