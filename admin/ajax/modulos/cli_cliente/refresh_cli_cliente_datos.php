<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliCliente::setSesPag($pag);

$criterio = new Criterio(CliCliente::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliCliente::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliCliente::getSesPagCantidad(), CliCliente::getSesPag());
$cli_clientes = CliCliente::getCliClientesDesdeBackend($paginador, $criterio);

include 'cli_cliente_datos.php';
?>

