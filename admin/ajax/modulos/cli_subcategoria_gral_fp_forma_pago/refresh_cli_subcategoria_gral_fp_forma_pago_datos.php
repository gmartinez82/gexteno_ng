<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliSubcategoriaGralFpFormaPago::setSesPag($pag);

$criterio = new Criterio(CliSubcategoriaGralFpFormaPago::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliSubcategoriaGralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_subcategoria_gral_fp_forma_pago');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliSubcategoriaGralFpFormaPago::getSesPagCantidad(), CliSubcategoriaGralFpFormaPago::getSesPag());
$cli_subcategoria_gral_fp_forma_pagos = CliSubcategoriaGralFpFormaPago::getCliSubcategoriaGralFpFormaPagosDesdeBackend($paginador, $criterio);

include 'cli_subcategoria_gral_fp_forma_pago_datos.php';
?>

