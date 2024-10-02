<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamDenominacionTarjetaGralFpMedioPago::setSesPag($pag);

$criterio = new Criterio(EkuParamDenominacionTarjetaGralFpMedioPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamDenominacionTarjetaGralFpMedioPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_denominacion_tarjeta_gral_fp_medio_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamDenominacionTarjetaGralFpMedioPago::getSesPagCantidad(), EkuParamDenominacionTarjetaGralFpMedioPago::getSesPag());
$eku_param_denominacion_tarjeta_gral_fp_medio_pagos = EkuParamDenominacionTarjetaGralFpMedioPago::getEkuParamDenominacionTarjetaGralFpMedioPagosDesdeBackend($paginador, $criterio);

include 'eku_param_denominacion_tarjeta_gral_fp_medio_pago_datos.php';
?>

