<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteGralFpCuota::setSesPag($pag);

$criterio = new Criterio(CliClienteGralFpCuota::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteGralFpCuota::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_gral_fp_cuota');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteGralFpCuota::getSesPagCantidad(), CliClienteGralFpCuota::getSesPag());
$cli_cliente_gral_fp_cuotas = CliClienteGralFpCuota::getCliClienteGralFpCuotasDesdeBackend($paginador, $criterio);

include 'cli_cliente_gral_fp_cuota_datos.php';
?>

