<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuParamProcesamientoPago::setSesPag($pag);

$criterio = new Criterio(EkuParamProcesamientoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamProcesamientoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_param_procesamiento_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuParamProcesamientoPago::getSesPagCantidad(), EkuParamProcesamientoPago::getSesPag());
$eku_param_procesamiento_pagos = EkuParamProcesamientoPago::getEkuParamProcesamientoPagosDesdeBackend($paginador, $criterio);

include 'eku_param_procesamiento_pago_datos.php';
?>

