<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralMedioPago::setSesPag($pag);

$criterio = new Criterio(GralMedioPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralMedioPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_medio_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralMedioPago::getSesPagCantidad(), GralMedioPago::getSesPag());
$gral_medio_pagos = GralMedioPago::getGralMedioPagosDesdeBackend($paginador, $criterio);

include 'gral_medio_pago_datos.php';
?>

