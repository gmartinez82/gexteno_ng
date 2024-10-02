<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliClienteCliRubro::setSesPag($pag);

$criterio = new Criterio(CliClienteCliRubro::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliClienteCliRubro::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_cliente_cli_rubro');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliClienteCliRubro::getSesPagCantidad(), CliClienteCliRubro::getSesPag());
$cli_cliente_cli_rubros = CliClienteCliRubro::getCliClienteCliRubrosDesdeBackend($paginador, $criterio);

include 'cli_cliente_cli_rubro_datos.php';
?>

