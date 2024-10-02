<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndChqTipoPago::setSesPag($pag);

$criterio = new Criterio(FndChqTipoPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqTipoPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_chq_tipo_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndChqTipoPago::getSesPagCantidad(), FndChqTipoPago::getSesPag());
$fnd_chq_tipo_pagos = FndChqTipoPago::getFndChqTipoPagosDesdeBackend($paginador, $criterio);

include 'fnd_chq_tipo_pago_datos.php';
?>

