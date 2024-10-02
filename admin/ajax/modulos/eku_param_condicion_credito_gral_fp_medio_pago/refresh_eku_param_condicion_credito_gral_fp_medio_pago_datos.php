<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamCondicionCreditoGralFpMedioPago::setSesPag($pag);

$criterio = new Criterio(EkuParamCondicionCreditoGralFpMedioPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamCondicionCreditoGralFpMedioPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_condicion_credito_gral_fp_medio_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamCondicionCreditoGralFpMedioPago::getSesPagCantidad(), EkuParamCondicionCreditoGralFpMedioPago::getSesPag());
$eku_param_condicion_credito_gral_fp_medio_pagos = EkuParamCondicionCreditoGralFpMedioPago::getEkuParamCondicionCreditoGralFpMedioPagosDesdeBackend($paginador, $criterio);

include 'eku_param_condicion_credito_gral_fp_medio_pago_datos.php';
?>

