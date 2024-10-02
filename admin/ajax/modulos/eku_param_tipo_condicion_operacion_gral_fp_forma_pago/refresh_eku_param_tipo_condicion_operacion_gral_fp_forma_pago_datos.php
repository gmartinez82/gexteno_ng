<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoCondicionOperacionGralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoCondicionOperacionGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoCondicionOperacionGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_condicion_operacion_gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoCondicionOperacionGralFpFormaPago::getSesPagCantidad(), EkuParamTipoCondicionOperacionGralFpFormaPago::getSesPag());
$eku_param_tipo_condicion_operacion_gral_fp_forma_pagos = EkuParamTipoCondicionOperacionGralFpFormaPago::getEkuParamTipoCondicionOperacionGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago_datos.php';
?>

