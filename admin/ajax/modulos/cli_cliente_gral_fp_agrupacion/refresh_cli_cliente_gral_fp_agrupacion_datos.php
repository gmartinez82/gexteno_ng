<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteGralFpAgrupacion::setSesPag($pag);

$criterio = new Criterio(CliClienteGralFpAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteGralFpAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_gral_fp_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteGralFpAgrupacion::getSesPagCantidad(), CliClienteGralFpAgrupacion::getSesPag());
$cli_cliente_gral_fp_agrupacions = CliClienteGralFpAgrupacion::getCliClienteGralFpAgrupacionsDesdeBackend($paginador, $criterio);

include 'cli_cliente_gral_fp_agrupacion_datos.php';
?>

