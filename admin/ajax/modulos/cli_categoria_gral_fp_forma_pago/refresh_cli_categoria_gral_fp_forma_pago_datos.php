<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliCategoriaGralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(CliCategoriaGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliCategoriaGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_categoria_gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliCategoriaGralFpFormaPago::getSesPagCantidad(), CliCategoriaGralFpFormaPago::getSesPag());
$cli_categoria_gral_fp_forma_pagos = CliCategoriaGralFpFormaPago::getCliCategoriaGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'cli_categoria_gral_fp_forma_pago_datos.php';
?>

