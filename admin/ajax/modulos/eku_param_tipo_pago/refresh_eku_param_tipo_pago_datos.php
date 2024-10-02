<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamTipoPago::setSesPag($pag);

$criterio = new Criterio(EkuParamTipoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_tipo_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamTipoPago::getSesPagCantidad(), EkuParamTipoPago::getSesPag());
$eku_param_tipo_pagos = EkuParamTipoPago::getEkuParamTipoPagosDesdeBackend($paginador, $criterio);

include 'eku_param_tipo_pago_datos.php';
?>

