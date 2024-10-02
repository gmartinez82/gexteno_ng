<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(GralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralFpFormaPago::getSesPagCantidad(), GralFpFormaPago::getSesPag());
$gral_fp_forma_pagos = GralFpFormaPago::getGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'gral_fp_forma_pago_datos.php';
?>

