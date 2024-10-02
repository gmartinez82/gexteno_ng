<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaComisionGralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(VtaComisionGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaComisionGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_comision_gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaComisionGralFpFormaPago::getSesPagCantidad(), VtaComisionGralFpFormaPago::getSesPag());
$vta_comision_gral_fp_forma_pagos = VtaComisionGralFpFormaPago::getVtaComisionGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'vta_comision_gral_fp_forma_pago_datos.php';
?>

