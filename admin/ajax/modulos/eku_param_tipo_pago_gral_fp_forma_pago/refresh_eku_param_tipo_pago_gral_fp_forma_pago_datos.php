<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoPagoGralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoPagoGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoPagoGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_pago_gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoPagoGralFpFormaPago::getSesPagCantidad(), EkuParamTipoPagoGralFpFormaPago::getSesPag());
$eku_param_tipo_pago_gral_fp_forma_pagos = EkuParamTipoPagoGralFpFormaPago::getEkuParamTipoPagoGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_pago_gral_fp_forma_pago_datos.php';
?>

