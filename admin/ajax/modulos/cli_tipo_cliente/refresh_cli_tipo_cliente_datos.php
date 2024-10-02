<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliTipoCliente::setSesPag($pag);

$criterio = new Criterio(CliTipoCliente::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliTipoCliente::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_tipo_cliente');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliTipoCliente::getSesPagCantidad(), CliTipoCliente::getSesPag());
$cli_tipo_clientes = CliTipoCliente::getCliTipoClientesDesdeBackend($paginador, $criterio);

include 'cli_tipo_cliente_datos.php';
?>

